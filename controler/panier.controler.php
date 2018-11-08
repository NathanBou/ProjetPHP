<?php
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");
require_once("../model/panier.class.php");
global $prixPanier;
$database = new DAO();
$ref=$_GET["ref"];
$categorie=$_GET["categorie"];
$user=$_GET["connect"];
$database->ajoutezAuPanier($user,$ref,$categorie);
$panier=$database->getPanier($user);
var_dump($panier);
//include("main.controler.php");
 ?>
