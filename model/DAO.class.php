<?php

require_once("categorie.class.php");
require_once("article.class.php");
require_once("comptes.class.php");

// Definition de l'unique objet de DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/musicall.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO($this->database);
          } catch (PDOException $e) {
            die ("erreur de connexion :".$e->getMessage());
          }



        }

 ?>