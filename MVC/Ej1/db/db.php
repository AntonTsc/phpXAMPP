<?php
    class Connect{
        public static function connection(){
            $connection = new mysqli("localhost", "root", "", "patronmvc");
            $connection->query("SET NAMES 'utf8'");
            return $connection;
        }
    }
?>