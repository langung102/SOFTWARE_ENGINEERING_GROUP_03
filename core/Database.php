<?php
    class Database {
        public $conn = NULL;
        private $server = 'localhost';
        private $dbName = 'uwc';
        private $user = 'root';
        private $password = '02082002';

        public function __construct() {
            $this->connect();
        }

        public function connect() {
            $this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            $this->conn->set_charset("utf8");
        }

        public function closeDatabase() {
            if ($this->conn) {
                $this->conn->close();
            }
        }

    }
?>