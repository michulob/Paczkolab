<?php

class ParcelSize{

  private $id;
  private $userCredits;
  private $packageSize;
  private $price;
  static public $connectionPDO;

  public function __construct (){
    $this->id = -1;
    $this->userCredits = '';
    $this->packageSize = '';
    $this->price = '';
  }

  public function getId(){
    $this->id;
  }
  public function getUserCredits(){
    $this->userCredits;
  }
  public function getPackageSize(){
    $this->packageSize;
  }
  public function getPrice(){
    $this->price;
  }


  public function setUserCredits($newUserCredits){
    $this->userCredits = $newUserCredits;
  }
  public function setPackageSize($newPackageSize){
    $this->packageSize = $newPackageSize;
  }
  public function setPrice($newPrice){
    $this->price = $newPrice;
  }

}



?>
