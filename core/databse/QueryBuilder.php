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
        $sql = "SELECT * FROM ($table) ORDER BY created_at DESC";

        try{
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    
    public function selectFive($table)
    {
        $sql = "SELECT * FROM ($table) ORDER BY created_at DESC LIMIT 5";

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
        $sql = "SELECT name FROM users WHERE id = {$id}";

        try{
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetch()[0];
        }catch(Exception $e){
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

    public function edit($table, $id, $parameters)
    {
        $parameters = array_filter($parameters, function ($value) {
            return !empty($value);
        });

        $parametros_p_editar = array();

        foreach($parameters as $name=>$value){
            if(!empty($value) ){
                $parametros_p_editar[] = "{$name} = :{$name}";
            }
        }

        if(!empty($parametros_p_editar)){
            $sql = sprintf(
                'UPDATE %s SET %s WHERE %s',
                $table,
                implode(', ', $parametros_p_editar),
                'id = :id'
            );

            $parameters['id'] = $id;

            try {
                $stnt = $this->pdo->prepare($sql);
                $stnt->execute($parameters);

            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            die("Todos os campos estão vazios.");
        }    
    }


    public function contador($table) {
        $sql = "SELECT COUNT(*) as total FROM $table";
    
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
    
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Retorna o número total de linhas
            return $result['total'];
        } catch (Exception $e) {
            // Em vez de 'die', você pode querer lidar com a exceção de uma maneira mais elegante, logando ou retornando um valor de erro, por exemplo.
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

