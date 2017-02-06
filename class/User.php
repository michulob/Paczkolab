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
    return $this->id;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getName(){
    return $this->name;
  }
  public function getSurname(){
    return $this->surname;
  }
  public function getCredits(){
    return $this->credits;
  }
  public function getHashedPassword(){
    return $this->hashedPassword;
  }


  public function setAddress($newAddress){
    $this->address = $newAddress;
    return TRUE;
  }
  public function setName($newName){
    $this->name = $newName;
    return TRUE;
  }
  public function setSurname($newSurame){
    $this->surname = $newSurame;
    return TRUE;
  }
  public function setCredits($newCredits){
    $this->credits = $newCredits;
    return TRUE;
  }
  public function setHashedPassword($newPassword){
    $this->hashedPassword = hash($newPassword, PASSWORD_BCRYPT);
    return TRUE;
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
