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

    public function edit($table, $id, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parametros) {
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $id;

        try {
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute($parametros);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



}