<?php
    class DB{
        protected $conn;
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname   = "mvc";
        function __construct(){
            $this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
                mysqli_set_charset($this->conn,'utf-8');
        }
    }

?>