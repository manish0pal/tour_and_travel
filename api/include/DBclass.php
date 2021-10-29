<?php

define('DB_SERVER', 'localhost');

define('DB_USERNAME', 'root');

define('DB_PASSWORD', '');

define('DB_DATABASE', 'tour');

class DBcon{
    public $connection;
    
    function __construct() {
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if($this->connection->connect_errno)
            die('database error -> ' . $this->connection->connect_errno);
    }
    
    function DBreturn(){
        return $this->connection;
    }
}




?>