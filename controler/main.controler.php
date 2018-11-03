<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

  if((!isset($_GET['connect']))&&(!isset($connect))){
      global $connect;
      global $user;
  }elseif((isset($_GET['connect']))&&($_GET['connect']!='')){

      global $user;
      $user=$_GET['connect'];
      global $connect;
      $connect=true;
  }elseif((isset($_GET['connect']))&&($_GET['connect']=='')){
    global $connect;
    $connect=false;
  }
  global $database;
  global $prixPanier;
  $prixPanier=0;

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
