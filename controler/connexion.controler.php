<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");
global $erreur;
$connect=false;
$database = new DAO();
$user = $_POST['username'];
if (isset($_GET["categorie"])) {
  global $cat;
    $cat=$_GET["categorie"];
}
$allusers=$database->getUsers();
$know=false;
foreach ($allusers as $value) {
  if ($user == $value['username']){
    $know= true;
  }
}
if ($know) {
  $thisuser=$database->getUtilisateur($user);
  $mdp = $_POST['password'];
  if ($thisuser->getPassword()!=$mdp){
    $erreur="Mot de passe incorrect";
  }
}else {
  $erreur="Non d'utilisateur inconnue";
}
if (isset($erreur)) {
  include("../View/pageConnexion.view.php");
}else{
  $connect=true;
  include("main.controler.php");
}
?>
