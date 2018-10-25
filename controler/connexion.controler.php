<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");


$user = $_POST['username'];
$mdp = $_POST['password'];



include("../View/pagePrincipale.view.html");








?>
