<?php


require 'class/User.php';

define('DB_HOST','localhost');
define('DB_USER','paczkolab');
define('DB_PASS','coderslab');
define('DB_DB','paczkolab');

$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DB.";charset=UTF8", DB_USER, DB_PASS);

User::$connectionPDO = $connection;

?>
