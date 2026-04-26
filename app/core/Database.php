<?php

require_once '../config/database.php';

class Database{

private static $instance;

public static function connect(){

if(!self::$instance){

self::$instance = new PDO(
"mysql:host=".DB_HOST.";dbname=".DB_NAME,
DB_USER,
DB_PASS
);

self::$instance->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);

}

return self::$instance;

}

}