<?php

require 'class/User.php';

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','coderslab');
define('DB_DB','michutter');

$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DB.";charset=UTF8", DB_USER, DB_PASS);

// FAKE TO DELETE NOW !!!!!!!!!!
// $connection = 'fakeconnection';
// END FAKIER

User::$connectionPDO = $connection;

var_dump($connection);

?>
