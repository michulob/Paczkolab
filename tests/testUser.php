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


function testSets (User $oUser){
  $oUser->setAddress('Sfornegacie 15u/333');
  $oUser->setName('Andrzej');
  $oUser->setSurname('Gołota');
  $oUser->setCredits('miliord baryłek ropy w złocie');
  $oUser->setHashedPassword('oddajoszczednosci');

  var_dump($oUser);
}


testSets($oUser);
//to do ! tests get and set function
//to do !!! write function to tests

?>
