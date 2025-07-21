<?php 

    class Database{

        private static $host = 'localhost';
        private static $name = 'root';
        private static $pass = '';
        private static $dbname = 'first-mvc';

        public static function connection(){

            $conn = new mysqli(
                self::$host,
                self::$name,
                self::$pass,
                self::$dbname
            );

            if($conn->connect_error){
                die('Database connection failed: '.$conn->connect_error);
            }

            return $conn;
        }

    }

?>