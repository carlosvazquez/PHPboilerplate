<?php

declare(strict_types=1);

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $table = sanitizeInput($table);
        $sql = "select * from {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $parameters)
    {
        $parameters = array_map('sanitizeInput', $parameters);
        try {
            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(', ', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }
}
