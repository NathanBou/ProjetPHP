<?php

//Première Partie
require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");

//Deuxième Partie
  global $database;
  global $prixPanier;
  global $admin;
  $database = new DAO();
  if((!isset($_GET['connect']))&&(!isset($connect))){ //première connexion
      global $connect;
      global $user;
      $prixPanier=0;
  }elseif((isset($_GET['connect']))&&($_GET['connect']!='')){ //l'utilisateur est connecté via get
      global $user;
      $user=$_GET['connect'];
      global $connect;
      $connect=true;
      $utilisateur = $database->getUtilisateur($user);
      $admin = $utilisateur->getType();
      $prixPanier=$database->getPrixPanier($user);
  }elseif((isset($connect))&&($connect)){ //l'utilisateur est connecté
    $prixPanier=$database->getPrixPanier($user);
    $utilisateur = $database->getUtilisateur($user);
    $admin = $utilisateur->getType();
  }elseif((isset($_GET['connect']))&&($_GET['connect']=='')){ //déconnexion
    global $connect;
    $connect=false;
    $prixPanier=0;
  }
  if (isset($_GET['categorie'])) {
    $categorie = $database->getCategorie($_GET['categorie']);
    $IDcategorie = $categorie->__get("id");
    if (isset($_POST['tri'])) {
      if ($_POST['tri'] == "nomA") {
        $articles = $database->triArticleNomAZ($IDcategorie);
      } else if ($_POST['tri'] == "nomZ"){
        $articles = $database->triArticleNomZA($IDcategorie);
      } else if ($_POST['tri'] == "prixc"){
        $articles = $database->triArticlePrixC($IDcategorie);
      } else if ($_POST['tri'] == "prixd") {
        $articles = $database->triArticlePrixD($IDcategorie);
      } else {
        $articles = $database->triArticleRef($IDcategorie);
      }
    } else {
      $articles = $database->triArticleRef($IDcategorie);
    }
    $nbelem = count($articles);
  }elseif (isset($cat)) {
    $categorie = $database->getCategorieId($cat);
    if (isset($_POST['tri'])) {
      if ($_POST['tri'] == "nomA") {
        $articles = $database->triArticleNomAZ($cat);
      } else if ($_POST['tri'] == "nomZ"){
        $articles = $database->triArticleNomZA($cat);
      } else if ($_POST['tri'] == "prixc"){
        $articles = $database->triArticlePrixC($cat);
      } else if ($_POST['tri'] == "prixd") {
        $articles = $database->triArticlePrixD($cat);
      } else {
        $articles = $database->triArticleRef($cat);
      }
    } else {
      $articles = $database->triArticleRef($cat);
    }

    $nbelem = count($articles);

  } else {
    $nbelem = 0;
  }

//Troisième Partie
  include("../View/pagePrincipale.view.php");
 ?>
