<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");


  global $prixPanier;
  $prixPanier=0;

  global $database = new DAO();


  include("../View/pagePrincipale.view.php");
 ?>
