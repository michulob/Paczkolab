<?php

// My Lord, this require or include shit is very dissapointment my soul
require 'class/User.php';

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','coderslab');
define('DB_DB','paczkolab');

$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DB.";charset=UTF8", DB_USER, DB_PASS);

User::$connectionPDO = $connection;

var_dump($connection);

?>
