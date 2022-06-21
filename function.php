<?php

function connectionDb()
{
    try {
        return new PDO('mysql:hostname=127.0.0.1;dbname=practitioner', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllData($pdo)
{
    $stateMent = $pdo->prepare('Select * from todos');
    
    $stateMent->execute();

    return $stateMent->fetchAll(PDO::FETCH_CLASS, "Task");
}

function dd($data)
{
    echo '<pre>';

    die(var_dump($data));
    
    echo '</pre>';
}