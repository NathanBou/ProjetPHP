<?php

class article{
 private $libelle;
 private $infoscompl;
 private $prix;
 private $ref;
 private $categorie;
 private $image;
  //function __construct() {

  //}

  function __get($name){
    return $this->$name;
  }

}
 ?>
