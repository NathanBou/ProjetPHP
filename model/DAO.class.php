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

    function getUtilisateur($nom) : utilisateur{
      $commande =  'SELECT * FROM utilisateur WHERE username="' . $nom . '"';

      $sth = $this->db->query($commande);
      $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"utilisateur");

      return $result[0];
      
    }


    function getID($nom): integer {
    $commande =  'SELECT id FROM categorie WHERE nom="' . $nom . '"';

    $sth = $this->db->query($commande);
    $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"categorie");
    //var_dump($result);
    return $result[0];

      }

    function getArticle($categorie): article {
    $commande =  'SELECT * FROM article WHERE categorie="' . $categorie . '"';

    $sth = $this->db->query($commande);
    $result = $sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"article");
    //var_dump($result);
    return $result[0];
}

}
 ?>
