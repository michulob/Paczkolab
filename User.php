<?php

/*
 *    Class reprezent one User
 *
 */
class User{

  private $id;
  private $address;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;

  public function __construct(){
    $this->id = -1;
    $this->address = '';
    $this->name = '';
    $this->surname = '';
    $this->credits = NULL;
    $this->hashedPassword = '';
  }

  public function getId(){

  }
  public function getAddress(){

  }
  public function getName(){

  }
  public function getSurname(){

  }
  public function getCredits(){

  }
  public function getHashedPassword(){

  }


  public function setAddress(){

  }
  public function setName(){

  }
  public function setSurname(){

  }
  public function setCredits(){

  }
  public function setHashedPassword(){

  }

  public function loadFromDB($id){

  }

  public function create(){

  }

  public function update(){

  }

  public function deleteFromDB(){

  }

  static public function loadAllFromDB(){

  }


}

?>
