<?php

require '../class/User.php';

$oUser = new User();

var_dump($oUser);
var_dump($oUser instanceof User);

//Back in future
if($oUser instanceof User){
  echo 'Instance is User';
}else{
  echo 'Instance is not User';
}


//to do ! tests get and set function
//to do !!! write function to tests

?>
