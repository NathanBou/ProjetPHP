<?php
class utilisateur{
  private $username;
  private $password;
  private $type;
  private $panier;

  //function __construct() {

  //}

  function getType(){
    return $this->type;
  }
  function getPassword(){
    return $this->password;
  }

}
?>
