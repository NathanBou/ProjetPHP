<?php
/**
 *
 */
require_once("../model/article.class.php");
class panier{
  private $art;
  private $user;
  function __construct($user)
  {
    $this->user=$user;
    $this->art=array();
  }
  function getPrix(){
    $prix=0;
    foreach ($art as $value) {
      $prix+= $value->getPrix();
    }
    return $prix;
  }
  public function ajoutezAuPanier($unArticle){
    $this->art[]=$unArticle;
  }
}
 ?>
