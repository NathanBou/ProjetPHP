<?php

class categorie{
  private $id;
  private $nom;
  private $pere;

  //function __construct() {

  //}

  function __get($name){
    return $this->$name;
}

}


 ?>
