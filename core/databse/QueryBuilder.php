<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(' , :', array_keys($parameters))
        );

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die("An error ocurred when trying to insert into database: {$e->getMessage()}");
        }
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM ($table)";

        try{
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function recuperaDadosDoAutor($id)
    {
        $sql = "SELECT `name` FROM `users` WHERE `id` = $id";

        try{
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parameters) {
                return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );

        $parameters['id'] = $id;

        try {
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;',
            $table,
            "id = :id"
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute(compact('id'));
        } catch (Exception $e) {
            die("An error ocurred when trying to delete from database: {$e->getMessage()}");
        }
    }

}

