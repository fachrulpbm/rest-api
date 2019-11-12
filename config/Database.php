<?php

    class Database{

        private $host = "localhost";
        private $db = "rest-api";
        private $user = "root";
        private $pass = "";
        public static $conn;

        public function __construct(){
            if (Database::$conn == null) {
                try {
                    Database::$conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
                } catch (PDOException $e) {
                    echo "Koneksi database gagal: ".$e->getMessage();
                }
            }
        }

    }

?>