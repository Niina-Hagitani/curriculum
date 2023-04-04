<?php
    // MySQLに接続する
    function connect() {
        $host = 'localhost';
        $dbname = 'checktest4';
        $user = 'root';
        $password = 'root';

        $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

        try {
            $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $pdo;
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
     
?>