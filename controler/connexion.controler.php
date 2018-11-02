<?php

require_once("../model/categorie.class.php");
require_once("../model/article.class.php");
require_once("../model/utilisateur.class.php");
require_once("../model/DAO.class.php");
global $database;
$database = new DAO();
$user = $_POST['username'];
var_dump($user);
$allusers=$database->getUsers();
foreach ($allusers as $usertest) {
  if ($user=$usertest) {
      echo "1";
  }
}
$mdp = $_POST['password'];











?>
