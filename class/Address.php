<?php

class Address{

  private $id;
  private $city;
  private $code;
  private $street;
  private $flatNumber;
  static public $connectionPDO;

  public function __construct (){
    $this->id = -1;
    $this->city = '';
    $this->code = '';
    $this->street = '';
    $this->flatNumber = '';
  }

  public function getId(){
    $this->id;
  }
  public function getCity(){
    $this->city;
  }
  public function getCode(){
    $this->code;
  }
  public function getStreet(){
    $this->street;
  }
  public function getFlatNumber(){
    $this->flatNumber;
  }

  public function setCity($newCity){
    $this->city = $newCity;
  }
  public function setCode($newCode){
    $this->code = $newCode;
  }
  public function setStreet($newStreet){
    $this->street = $newStreet;
  }
  public function setFlatNumber($newFlatNumber){
    $this->flatNumber = $newFlatNumber;
  }

  public function loadFromDB($id){

  }

  public function create(){

  }

  static public function loadAllFromDB(){

  }


}



?>
