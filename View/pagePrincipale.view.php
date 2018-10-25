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
                  <a class="lienConnexion" href="../View/pageConnexion.view.html"><span>Compte</span></a>
                  <span class="sepHome">|</span>
                  <div class="Panier">
                    <a href="../View/panier.view.php">
                      <span class="prixPanier"> <?= $prixPanier ?> € </span>
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
                      <li><a href="#">Guitare</a></li>
                      <li><a href="#">Piano</a></li>
                      <li><a href="#">Violon</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Instruments à Vents</a>
                    <ul class="sousmenu2">
                      <li><a href="#">Bois</a>
                        <ul class="sousmenu3">
                          <li><a href="#">Clarinette</a></li>
                          <li><a href="#">Saxophone</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Cuivres</a>
                        <ul class="sousmenu3">
                          <li><a href="#">Cor</a></li>
                          <li><a href="#">Trompette</a></li>
                          <li><a href="#">Trombone</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Percussions</a></li>
                </ul>
            </li>
            <li class="menu-accessoires"><a href="#">Accessoires</a>
                <ul class="sousmenu">
                  <li><a href="#">Mediator</a></li>
                  <li><a href="#">Bec</a></li>
                  <li><a href="#">Cordes</a></li>
                  <li><a href="#">Pupitre</a></li>
                  <li><a href="#">Diapason</a></li>
                  <li><a href="#">Accordeur</a></li>
                </ul>
            </li>
            <li class="menu-partitions"><a href="#">Partitions</a>
              <ul class="sousmenu">
                <li><a href="#">Bach</a></li>
                <li><a href="#">Mozart</a></li>
                <li><a href="#">Chopin</a></li>
                <li><a href="#">Vivaldi</a></li>
                <li><a href="#">Ravel</a></li>
                <li><a href="#">Beethoven</a></li>
                <li><a href="#">Schubert</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      </header>
  </body>
</html>
