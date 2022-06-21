<?php

class Connection 
{
    public static function make()
    {
        try {
            return new PDO('mysql:hostname=127.0.0.1;dbname=practitioner', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}