<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music-all</title>
    <link rel="stylesheet" href="../View/pagePrincipale.view.css">
  </head>
  <body>
      <header>
        <div class="MainMenu">
          <div class="MenuTot">
            <div class="MenuEste">
              <div class="col1">
                <a href=""><img src="../View/models/logo.jpg" alt="Logo du site" width="238" height="153"></a>
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
                      <img src="../View/models/panier.png" alt="panier" width="23" height="23">
                      <span class="prixPanier"><?=$prixPanier?>€</span>
                    </a>
                  </div>
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
                      <li><a href="../controler/main.controler.php?categorie=Guitare">Guitare</a></li>
                      <li><a href="../controler/main.controler.php?categorie=Piano">Piano</a></li>
                      <li><a href="../controler/main.controler.php?categorie=Violon">Violon</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Instruments à Vents</a>
                    <ul class="sousmenu2">
                      <li><a href="#">Bois</a>
                        <ul class="sousmenu3">
                          <li><a href="../controler/main.controler.php?categorie=Clarinette">Clarinette</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Saxophone">Saxophone</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Cuivres</a>
                        <ul class="sousmenu3">
                          <li><a href="../controler/main.controler.php?categorie=Cor">Cor</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Trompette">Trompette</a></li>
                          <li><a href="../controler/main.controler.php?categorie=Trombone">Trombone</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="../controler/main.controler.php?categorie=Percussions">Percussions</a></li>
                </ul>
            </li>
            <li class="menu-accessoires"><a href="#">Accessoires</a>
                <ul class="sousmenu">
                  <li><a href="../controler/main.controler.php?categorie=Mediator">Mediator</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Bec">Bec</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Cordes">Cordes</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Pupitre">Pupitre</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Diapason">Diapason</a></li>
                  <li><a href="../controler/main.controler.php?categorie=Accordeur">Accordeur</a></li>
                </ul>
            </li>
            <li class="menu-partitions"><a href="#">Partitions</a>
              <ul class="sousmenu">
                <li><a href="../controler/main.controler.php?categorie=Bach">Bach</a></li>
                <li><a href="../controler/main.controler.php?categorie=Mozart">Mozart</a></li>
                <li><a href="../controler/main.controler.php?categorie=Chopin">Chopin</a></li>
                <li><a href="../controler/main.controler.php?categorie=Vivaldi">Vivaldi</a></li>
                <li><a href="../controler/main.controler.php?categorie=Ravel">Ravel</a></li>
                <li><a href="../controler/main.controler.php?categorie=Beethoven">Beethoven</a></li>
                <li><a href="../controler/main.controler.php?categorie=Schubert">Schubert</a></li>
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
          <?php if($connect){?>
            <a href="#"> <img src="../View/models/panier.png" alt="AjoutezAuPanier" width="23" height="23">Ajoutez au panier</a>
          <?php } ?>
          </div>
          <?php } ?>
        <?php } ?>
      </div>
  </body>
</html>
