<?php

include 'config/connection.php';


// var_dump($_GET);
//Deklaracje zmiennych
$request = '';
$arrayRequest = [];
$requestClass = '';
$requestParam = '';

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_SERVER);

//Parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode ('/', $request);

// var_dump($arrayRequest[3]);
// var_dump($_SERVER);

if(isset($arrayRequest[3])){
  $requestClass = $arrayRequest[3];
}else{
  exit ('Nie podałeś nazwy klasy');
}

if(isset($arrayRequest[4])){
  $requestParam = intval($arrayRequest[4]);
}else{
  echo 'Nie podałeś parametru';
}


if ($_SERVER['REQUEST_METHOD']=='GET') {
  if ($requestClass=='user') {
    var_dump($requestClass);
    // poszukac lepszego rozwiazania
    if($requestParam > 0){
      var_dump($requestParam);
      // Wyswietl jednego usera o podanym id
      $oUser = new User();
      $userData = $oUser->loadFromDB($requestParam);
      var_dump($userData);
      print_r($userData);
    }elseif($requestParam==NULL ){
      // Wyświetl wszystkich userow
      $allUsers = User::loadAllFromDB();
      $arr['a'] = 'dupa';
      $arr['b'] = 'kupa';
      print_r(json_encode($arr));
      var_dump(json_encode($arr));
      print_r(json_encode($allUsers));
      var_dump(json_encode($allUsers));
    }
  }
}


?>
