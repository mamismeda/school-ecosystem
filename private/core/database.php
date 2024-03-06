<?php

// Database connection
class Database {
    private function connect()
    {
        $string = "mysql:host=localhost;dbname=school_db";
        $con = new PDO($string, 'root', '');
    }
}
