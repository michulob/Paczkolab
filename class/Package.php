<?php

class Package{

  private $id;
  private $userId;
  private $size;
  static public $connectionPDO;

  public function __construct (){
    $this->id = -1;
    $this->userId = '';
    $this->size = '';
  }

  public function getId(){
    $this->id;
  }
  public function getUserId(){
    $this->userId;
  }
  public function getSize(){
    $this->size;
  }

  public function setUserId($newUserId){
    $this->userId = $newUserId;
  }
  public function setSize($newSize){
    $this->size = $newSize;
  }

  public function loadByIdFromDB($id){

  }

  public function loadByUserIdFromDB($userId){

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
