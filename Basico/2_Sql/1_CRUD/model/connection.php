<?php

namespace MySqlCrud
{
    class Database
    {
        private $connection;
        private static $instance;
        private $host = "localhost"; // "127.0.0.1"
        private $database = "test_world";
        private $username = "root";
        private $password = "";

        public function __construct()
        {
            $this->connect();
        }

        public function getConnection()
        {
            return $this->connection;
        }

        public static function getInstance()
        {
            if (!self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function connect()
        {
            $this->connection = new \mysqli($this->host, $this->username, $this->password, $this->database);

            if (mysqli_connect_error()) {
                trigger_error("❌ -> ha habido un error al conectarse a la base de datos \n 
                                     " . mysqli_connect_error(), E_USER_ERROR);
            }
        }
    }
}
