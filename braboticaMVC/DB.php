<?php

class DB
{
    public static function connect()
    {
        $host   = "localhost";
        $db     = "braboticadb";
        $user   = "root";
        $pass   = "";

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4;port=3306";

        try 
        {
            return new PDO($dsn, $user, $pass);
        } catch (PDOException $e)
        {
            throw new PDOException($e->getMessage());
        }
    }
}