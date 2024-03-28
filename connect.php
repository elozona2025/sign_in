<?php

define('DB_DRIVER', 'mysql');
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'login');
define('DB_PORT', '3306');


try {
    $conn = new \PDO(DB_DRIVER.':host='.HOST.':'.DB_PORT.';dbname='.DATABASE, USER, PASSWORD);
 echo 'connected';
} catch (\PDOException $e) {
    echo 'error';
    throw $e;
}