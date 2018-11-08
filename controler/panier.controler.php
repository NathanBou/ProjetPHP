<?php
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");
require_once("../model/panier.class.php");
$database = new DAO();
$article=$database->getArticleRef($_GET["ref"],$_GET["categorie"]);
global $prixPanier;
$prixPanier=$prixPanier+($article->getPrix());
include("main.controler.php");
 ?>
