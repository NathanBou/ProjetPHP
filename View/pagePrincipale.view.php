<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music-all</title>
    <link rel="stylesheet" href="../View/pagePrincipale.view.css">
  </head>
  <body>
      <header>
        <?php
          global $parametre;
          if($connect){
            $parametre="connect=".$user;
          }else{
            $parametre="connect=";
          }
          ?>
        <div class="MainMenu">
          <div class="MenuTot">
            <div class="MenuEste">
              <div class="col1">
                <a href="main.controler.php?<?php echo $parametre; ?>"><img src="../View/models/logo.jpg" alt="Logo du site" width="238" height="153"></a>
              </div>
              <div class="col2">
                <div class="ligne1">
                  <span class="sepHome">|</span>
                  <a class="lienHome" href=""><span>Accueil</span></a>
                  <span class="sepHome">|</span>
                  <a class="lienConnexion" href="../View/pageConnexion.view.php"><span><?php if($connect){echo $user;}else{echo "Compte";}?></span></a>
                  <span class="sepHome">|</span>
                  <div class="Panier">
                    <a href="../View/panier.view.php">
                      <img src="../View/models/panier.png" alt="panier" width="22" height="22">
                      <span class="prixPanier"><?=$prixPanier?>€</span>
                    </a>
                  </div>
                  <span class="sepHome">|</span>
                  <?php if($connect){ ?>
                    <a href="main.controler.php?connect="> <img src="../View/models/logout.png" alt="logout" width="23" height="23"> </a>
                    <span class="sepHome">|</span>
                  <?php } ?>
                </div>
                <div class="ligne2">
                  <div class="slogan">
                    <p class="Slg">La musique pour tous</p>
                    <h1 class="Titre">Music-all</h1>
                  </div>
                </div>
              </div>
          </div>
          </div>
      </div>
      <div class="MenuDeroulant">
        <nav>
          <ul>
            <li class="menu-instruments"><a href="">Instruments</a>
                <ul class="sousmenu">
                  <li><a href="#">Instruments à Cordes</a>
                    <ul class="sousmenu2">

                      <li><a href="../controler/main.controler.php?categorie=Guitare&<?php echo $parametre; ?>">Guitare</a></li>
                      <li><a href="../controler/main.controler.php?categorie=Piano&<?php echo $parametre; ?>">Piano</a></li>
                      <li><a href="../controler/main.controler.php?categorie=Violon&<?php echo $parametre; ?>">Violon</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Instruments à Vents</a>
                    <ul class="sousmenu2">
                      <li><a href="#">Bois</a>
                        <ul class="sousmenu3">
                          <li><a href="../controler/main.controler.php?categorie=Clarinette&<?php echo $parametre; ?>">Clarinette</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Saxophone&<?php echo $parametre; ?>">Saxophone</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Cuivres</a>
                        <ul class="sousmenu3">
                          <li><a href="../controler/main.controler.php?categorie=Cor&<?php echo $parametre; ?>">Cor</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Trompette&<?php echo $parametre; ?>">Trompette</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Trombone&<?php echo $parametre; ?>">Trombone</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="../controler/main.controler.php?categorie=Percussions&<?php echo $parametre; ?>">Percussions</a></li>
                </ul>
            </li>
            <li class="menu-accessoires"><a href="#">Accessoires</a>
                <ul class="sousmenu">
                  <li><a href="../controler/main.controler.php?categorie=Mediator&<?php echo $parametre; ?>">Mediator</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Bec&<?php echo $parametre; ?>">Bec</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Cordes&<?php echo $parametre; ?>">Cordes</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Pupitre&<?php echo $parametre; ?>">Pupitre</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Diapason&<?php echo $parametre; ?>">Diapason</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Accordeur&<?php echo $parametre; ?>">Accordeur</a></li>
                </ul>
            </li>
            <li class="menu-partitions"><a href="#">Partitions</a>
              <ul class="sousmenu">
                <li><a href="../controler/main.controler.php?categorie=Bach&<?php echo $parametre; ?>">Bach</a></li>
                <li><a href="../controler/main.controler.php?categorie=Mozart&<?php echo $parametre; ?>">Mozart</a></li>
                <li><a href="../controler/main.controler.php?categorie=Chopin&<?php echo $parametre; ?>">Chopin</a></li>
                <li><a href="../controler/main.controler.php?categorie=Vivaldi&<?php echo $parametre; ?>">Vivaldi</a></li>
                <li><a href="../controler/main.controler.php?categorie=Ravel&<?php echo $parametre; ?>">Ravel</a></li>
                <li><a href="../controler/main.controler.php?categorie=Beethoven&<?php echo $parametre; ?>">Beethoven</a></li>
                <li><a href="../controler/main.controler.php?categorie=Schubert&<?php echo $parametre; ?>">Schubert</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      </header>
      <div class="listArt">
      <?php if  ($nbelem != 0) {?>
      <h1><?= $categorie->__get("nom") ?></h1>
      <br>
      <?php foreach($articles as $key => $value){   ?>
        <div class="Art">
          <img src="../View/models/<?= $value->__get("image") ?>" alt="<?=$value->__get("libelle")?>" height="300" width="300"/> <br>
          <?= $value->__get("libelle") ?> <br>
          Informations complémentaires : <?= $value->__get("infoscompl") ?> <br>
          Prix : <?= $value->__get("prix") ?><br>
          Ref : <?= $value->__get("ref") ?> <br>
          <?php if($connect){?>
            <a href="panier.controler.php?<?php echo $parametre; ?>&ref=<?= $value->__get("ref")?>&categorie=<?= $value->__get("categorie") ?>"> <img src="../View/models/panier.png" alt="AjoutezAuPanier" width="23" height="23">Ajoutez au panier</a>
          <?php }else{?>
            <a href="../View/pageConnexion.view.php">Connectez vous !</a>
          <?php } ?>
          </div>
          <?php } ?>
        <?php } ?>
      </div>
  </body>
</html>
