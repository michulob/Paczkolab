<?php

/*
*  Class reprezent one User
*/
class User{

  private $id;
  private $addressId;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;
  static public $connectionPDO;

  public function __construct(){
    $this->id = -1;
    $this->addressId = NULL;
    $this->name = '';
    $this->surname = '';
    $this->credits = NULL;
    $this->hashedPassword = '';
  }

  public function getId(){
    return $this->id;
  }
  public function getAddressId(){
    return $this->addressId;
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


  public function setAddressId($newAddressId){
    $this->addressId = $newAddressId;
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
    $this->hashedPassword = password_hash( $newPassword, PASSWORD_BCRYPT);
    return TRUE;
  }

  public function loadFromDB($id){
      $sql = 'SELECT * FROM user WHERE id=?';
      $result = Self::$connectionPDO->prepare($sql);
      $result->execute([$id]);
      if ($result==TRUE && $result->rowCount()==1){
        $row = $result->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->addressId = $row['address_id'];
        $this->name = $row['name'];
        $this->surname = $row['surname'];
        $this->credits = $row['credits'];
        $this->hashedPassword = $row['hashed_password'];
        // not true because usage on view
        return $row;
      }
      return NULL;
  }

  public function create(){

  }

  public function update(){

  }

  public function deleteFromDB(){

  }

  static public function loadAllFromDB(){
    $sql = 'SELECT * FROM user';
    if ($result = Self::$connectionPDO->query($sql)){
      $row = [];
      foreach ($result as $key => $value) {
        $row[$key] = $value;
      }
      return $row;
    }
    return NULL;
  }


}

?>
