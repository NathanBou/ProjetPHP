<?php
class utilisateur{
  private $username;
  private $password;
  private $type;

  //function __construct() {

  //}

  function getType(){
    return $this->type;
  }

  function getPassword(){
    return $this->password;
  }
  
  function getUsername(){
    return $this->username;
  }

}
?>
