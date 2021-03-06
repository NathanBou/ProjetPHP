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
          if(isset($categorie)){
            global $paracat;
            $paracat="categorie=".$categorie->__get("nom");
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
                  <a class="lienHome" href="main.controler.php?<?php echo $parametre; ?>"><span>Accueil</span></a>
                  <span class="sepHome">|</span>
                  <?php if($connect){echo $user;}else{?> <a class="lienConnexion" href="../View/pageConnexion.view.php?<?php if(isset($paracat)){echo $paracat;} ?>">Compte</a><?php } ?>
                  <span class="sepHome">|</span>
                  <div class="Panier">
                    <a href="panier.controler.php?<?php echo $parametre; ?>">
                      <img src="../View/models/panier.png" alt="panier" width="22" height="22">
                      <span class="prixPanier"><?=$prixPanier?>€</span>
                    </a>
                  </div>
                  <span class="sepHome">|</span>
                  <?php if($connect){ ?>
                    <a href="main.controler.php?connect=&<?php if(isset($paracat)){echo $paracat;} ?>"> <img src="../View/models/logout.png" alt="logout" width="23" height="23"> </a>
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

      <?php if  ($nbelem != 0) {?>
      <div class="tris">
        <h1>Trier par :</h1>
        <FORM class="" action="../controler/main.controler.php?<?php echo $parametre; ?>&<?php if(isset($paracat)){echo $paracat;} ?>" method="post">
          <div class="">
            <label for="ref">Référence</label>
          <INPUT id="ref" type="radio" name="tri" value="référence">
          </div>
          <div class="">
            <label for="nomA">Nom A-Z</label>
          <INPUT id = "nomA" type="radio" name="tri" value="nomA">
          </div>
          <div class="">
            <label for="nomZ">Nom Z-A</label>
          <INPUT id = "nomZ" type="radio" name="tri" value="nomZ">
          </div>
          <div class="">
            <label for="prixc">Prix croissant</label>
          <INPUT id = "prixc" type="radio" name="tri" value="prixc">
          </div>
          <div class="">
            <label for="prixd">Prix décroissant</label>
          <INPUT id = "prixd" type="radio" name="tri" value="prixd">
          </div>
          <div class="bouton">
            <input type="submit" name="Valider" value="Valider">
            </div>


        </FORM>
      </div>

      <div class="listArt">

      <h1><?= $categorie->__get("nom") ?></h1>
      <br>
      <?php foreach($articles as $key => $value){   ?>
        <div class="ArticleCatalogue">
          <fieldset class="Art">
            <h2><?= $value->__get("libelle") ?></h2> <br>
            <img src="../View/models/<?= $value->__get("image") ?>" alt="<?=$value->__get("libelle")?>" height="300" width="300"/> <br>
            Informations complémentaires : <?= $value->__get("infoscompl") ?> <br>
            Prix : <?= $value->__get("prix") ?> €<br>
            Ref : <?= $value->__get("ref") ?> <br>
            <?php if($connect){?>
              <a href="panier.controler.php?<?php echo $parametre; ?>&ref=<?= $value->__get("ref")?>&cat=<?= $value->__get("categorie") ?>"> <img src="../View/models/panier.png" alt="AjoutezAuPanier" width="23" height="23"><input type="submit" name="" value="Ajoutez au panier"> </a>
            <?php }else{?>
              <a href="../View/pageConnexion.view.php?<?php if(isset($paracat)){echo $paracat;} ?>"><input type="submit" name="" value="Connectez vous !"></a>
            <?php } ?>
            <?php if ($admin==0) { ?>
              <form class="" action="main.controler.php?<?php echo $parametre; ?>&ref=<?php echo $value->__get("ref");?>&<?php if(isset($paracat)){echo $paracat;} ?>" method="post">
                <input type="number" name="prix" step=0.01 min=0.00 value=0.00>
                <input type="submit" name="changerPrix" value="Changer le prix">
              </form>
            <?php } ?>
        </fieldset>
          </div>
          <?php } ?>
        <?php }elseif (isset($affichepanier)&&$affichepanier) { ?>
          <div class="listPanier">
          <h1> Votre panier </h1>
          <?php foreach ($panier as $val) { $value=$database->getArticleRef($val["ref"]);?>
            <div class="ArticlePanier">
              <fieldset class="Article">
              <h2> <?= $value->__get("libelle") ?> </h2><br>
              <img src="../View/models/<?= $value->__get("image") ?>" alt="<?=$value->__get("libelle")?>" height="250" width="250"/> <br>
              Prix : <?= $value->__get("prix") ?> €<br>
              Ref : <?= $value->__get("ref") ?> <br>
              Quantite : <?= $val["quantite"]?> <br>
              <a href="panier.controler.php?<?php echo $parametre; ?>&retirer=article&ref=<?= $value->__get("ref")?>"><input type="submit" name="vider" value="Retirer l'article"> </a>
              <?php if ($val["quantite"]>1){ ?>
                <a href="panier.controler.php?<?php echo $parametre; ?>&retirer=unarticle&ref=<?= $value->__get("ref")?>"><input type="submit" name="vider" value="Retirer un seul article"> </a>
              <?php } ?>
            </fieldset>
            </div>
          <?php }  ?>
          <a href="panier.controler.php?<?php echo $parametre; ?>&retirer=all"><input type="submit" name="vider" value="Videz le panier"> </a>
            </div>
        <?php }else{ ?>
          <img src="../View/models/accueil.jpg" alt="photo accueil" width="100%" height="75%">
        <?php } ?>
      </div>
  </body>
</html>
