<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $stateMent = $this->pdo->prepare("select * from {$table}");

        $stateMent->execute();

        return $stateMent->fetchAll(PDO::FETCH_CLASS);
    }
}