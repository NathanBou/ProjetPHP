<?php
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

global $database;
$database = new DAO();
$user=$_GET["connect"];
if((isset($_GET["ref"]))&&(isset($_GET["cat"]))){
  global $cat;
  $ref=$_GET["ref"];
  $cat=$_GET["cat"];
  $database->ajoutezAuPanier($user,$ref,$cat);
  $panier=$database->getPanier($user);
  include("main.controler.php");
}else {
  $affichepanier=true;
  $panier=$database->getPanier($user);
  include("main.controler.php");
}
 ?>
