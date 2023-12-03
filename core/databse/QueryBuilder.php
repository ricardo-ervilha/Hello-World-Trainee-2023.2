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
        $sql = "SELECT * FROM {$table}";

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function validateLogin($email, $senha)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->rowCount();
        } catch (Exception $e) {
            die("An error ocurred when trying to insert into database: {$e->getMessage()}");
        }
    }

    public function selectUser($email, $senha)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die("An error ocurred when trying to insert into database: {$e->getMessage()}");
        }
    }

    public function selectUserID($id)
    {
        $sql = "SELECT * FROM users WHERE id = '$id'" ;

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die("An error ocurred when trying to insert into database: {$e->getMessage()}");
        }
    }




}