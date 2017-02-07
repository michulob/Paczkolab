<?php

// require '../class/User.php';
require '../config/connection.php';

var_dump(User::$connectionPDO);
$oUser = new User();

// var_dump($oUser);
// var_dump($oUser instanceof User);

//Back in future
// if($oUser instanceof User){
//   echo 'Instance is User';
// }else{
//   echo 'Instance is not User';
// }


function testSets (User $oUser){
  $oUser->setAddressId(3);
  $oUser->setName('Andrzej');
  $oUser->setSurname('Gołota');
  $oUser->setCredits(1000);
  $oUser->setHashedPassword('oaaaaaaa');

  var_dump($oUser);
}


// testSets($oUser);
//to do ! tests get and set function
//to do !!! write function to tests

//
// var_dump($oUser);
// $oUser->loadFromDB(1);
// var_dump($oUser);


?>
