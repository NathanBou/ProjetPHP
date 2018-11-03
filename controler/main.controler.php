<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

  if(!isset($connect)){
      global $connect;
      echo "hey";
  }elseif(isset($connect)){
    $connect=true;
  }

  global $prixPanier;
  $prixPanier=0;
  global $database;
  $database = new DAO();
  if (isset($_GET['categorie'])) {
    $categorie = $database->getCategorie($_GET['categorie']);
    $IDcategorie = $categorie->__get("id");
    $articles = $database->getArticle($IDcategorie);

    $nbelem = count($articles);

  } else {
    $nbelem = 0;
  }


  include("../View/pagePrincipale.view.php");
 ?>
