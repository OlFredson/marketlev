<?php

namespace App\Core;

use PDO;

class Database extends PDO{
    private $dsn;
    private $username;
    private $password;
    private $options;
    public function __construct()
    {
        $dsn="mysql:host=localhost;dbname=marketlev;charset=utf8;port=8889";
        $username="root";
        $password="root";
        $options=[];
        parent::__construct($dsn, $username, $password, $options);
    }
}