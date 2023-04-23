<?php
    class Database {
        public $conn = NULL;
        private $server = 'localhost';
        private $port = 3307;
        private $dbName = 'uwc';
        private $user = 'root';
        private $password = '';

        public function __construct() {
            $this->connect();
        }

        public function connect() {
            $this->conn = mysqli_connect($this->server . ":" . $this->port, $this->user, $this->password);
            mysqli_select_db($this->conn, $this->dbName);
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