<?php
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

global $prixPanier;
global $cat;
$database = new DAO();
$ref=$_GET["ref"];
$cat=$_GET["cat"];
$user=$_GET["connect"];
var_dump($cat);
$database->ajoutezAuPanier($user,$ref,$cat);
$panier=$database->getPanier($user);
include("main.controler.php");
 ?>
