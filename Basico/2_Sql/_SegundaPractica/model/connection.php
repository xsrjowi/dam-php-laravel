<?php

/*
* Mysql database class - only one connection alowed
*/
namespace practicaciristianjoel {
    class Database
    {
        private $connection;
        private static $instance; //The single instance
        private $host = "localhost";
        private $username = "root";
        private $password = "";

        /*
        Get an instance of the Database
        @return Instance
        */
        public static function getInstance()
        {
            if (!self::$instance) { // If no instance then make one
                self::$instance = new self();
            }
            return self::$instance;
        }

        // Constructor
        private function __construct()
        {
            $this->connection = new \mysqli($this->host, $this->username, $this->password);
            // Error handling
            if (mysqli_connect_error()) {
                trigger_error("ERROR: <br> -> " . mysqli_connect_error(), E_USER_ERROR);
            }
        }
        // Magic method clone is empty to prevent duplication of connection
        private function __clone()
        {
        }

        // Get mysqli connection
        public function getConnection()
        {
            return $this->connection;
        }
    }
}
