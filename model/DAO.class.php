<?php

require_once("categorie.class.php");
require_once("article.class.php");
require_once("utilisateur.class.php");


    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../model/data/musicall.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO($this->database);
          } catch (PDOException $e) {
            die ("erreur de connexion :".$e->getMessage());
          }



        }
    function getUsers(){
      $commande =  'SELECT username FROM utilisateur ';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
    function getUtilisateur($nom) : utilisateur{
      $commande =  'SELECT * FROM utilisateur WHERE username="' . $nom . '"';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"utilisateur");
      return $result[0];
    }
    function getCategorie($nom): categorie {
      $commande =  'SELECT * FROM categorie WHERE nom="' . $nom . '"';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"categorie");
      //var_dump($result);
      return $result[0];
      }
    function getCategorieId($id):categorie{
      $commande =  'SELECT * FROM categorie WHERE id="' . $id . '"';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"categorie");
      //var_dump($result);
      return $result[0];
    }
    function getArticle($categorie): array {
      $commande =  'SELECT * FROM article WHERE categorie="' . $categorie . '"';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"article");
      //var_dump($result);
      return $result;
    }
    function getArticleRef($ref): article {
      $commande =  'SELECT * FROM article WHERE ref="' . $ref . '"';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"article");
      return $result[0];
    }
    function ajoutezAuPanier($user,$ref,$cat){
      $test= "SELECT quantite FROM panier WHERE user=\"$user\" AND ref=\"$ref\"";
      $sth = $this->db->query($test);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      if (!empty($result)) {
        $quant=intval($result[0]['quantite'])+1;
        $commande="UPDATE panier SET quantite='$quant' WHERE user='$user' AND ref='$ref'";
        $this->db->exec($commande);
      }else{
        $commande = "INSERT INTO panier(user,ref,categorie,quantite) VALUES('$user','$ref','$cat',1)";
        $this->db->exec($commande);
      }
    }
    function getPanier($user){
      $commande =  'SELECT * FROM panier WHERE user="'.$user.'" ';
      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
    function getPrixPanier($user):int{
      $panier=$this->getPanier($user);
      $prixtot=0;
      foreach ($panier as $value) {
        $ref=$value['ref'];
        $article=$this->getArticleRef($ref);
        $prixarticle=($article->getPrix())*$value['quantite'];
        $prixtot=$prixtot+$prixarticle;
      }
      return $prixtot;
    }
}
 ?>
