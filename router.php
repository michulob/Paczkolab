<?php

include 'config/connection.php';

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_SERVER);

if ($_SERVER['REQUEST_METHOD']=='GET') {
  if ($_SERVER['REQUEST_URI']=='/Paczkolab/router.php/user') {
    $newUser = new User();
    
  }else {

  }
}



?>
