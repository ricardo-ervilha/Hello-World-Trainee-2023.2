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
        } catch (Exeption $e) {
            die("An error ocurred when trying to delete from database: {$e->getMessage()}");
        }
    }

    public function deletePost($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s;',
            $table,
            "id = :id"
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute(compact('id'));
        } catch (Exeption $e) {
            die("An error ocurred when trying to delete from database: {$e->getMessage()}");
        }
    }
}