<?php
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

global $prixPanier;
$database = new DAO();
$ref=$_GET["ref"];
$cat=$_GET["cat"];
$user=$_GET["connect"];
$database->ajoutezAuPanier($user,$ref,$cat);
$panier=$database->getPanier($user);
//var_dump($panier);
include("main.controler.php");
 ?>
