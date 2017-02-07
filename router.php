<?php

include 'config/connection.php';

//Deklaracje zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_SERVER);

//Parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode ('/', $request);

// var_dump($arrayRequest);
// var_dump($arrayRequest[3]);
// var_dump($_SERVER);

if(isset($arrayRequest[3])){
  $requestClass = $arrayRequest[3];
}else{
  exit ('Nie podałeś nazwy klasy');
}

if ($_SERVER['REQUEST_METHOD']=='GET') {
  if ($requestClass=='user') {
    $oUser = new User();
    $userData = $oUser->loadFromDB(1);
    var_dump($userData);
  }else {

  }
}


?>
