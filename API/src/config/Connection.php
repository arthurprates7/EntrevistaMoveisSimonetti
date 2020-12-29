<?php

    namespace src\config;

    abstract class Connection{

        protected $pdo = NULL;

        public function __construct(){

            $host   = "localhost";
            $port   = "3306";
            $user   = "root";
            $pass   = "";
            $dbname = "blog";

            $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

            $this->pdo = new \PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );            

        }

    }