<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music-all</title>
    <link rel="stylesheet" href="../View/view.pagePrincipale.css">
  </head>
  <body>
      <header>
        <div class="MainMenu">
          <div class="MenuEste">
            <div class="col1">
              <a href=""><img src="../View/models/logo.jpg" alt="Logo du site" width="238" height="153"></a>
            </div>
            <div class="col2">
              <div class="ligne1">
                <span class="sepHome">|</span>
                <a class="lienHome" href=""><span>Accueil</span></a>
                <span class="sepHome">|</span>
                <a class="lienConnexion" href="../View/view.pageConnexion.html"><span>Compte</span></a>
                <span class="sepHome">|</span>
                <a href="../View/view.panier.php">
                  <span class="prixPanier"> <?= $prixPanier ?> € </span>
                </a>
                <span class="sepHome">|</span>
              </div>
              <div class="ligne2">
                <div class="slogan">
                  <p>La musique pour tous</p>
                  <h1>Music-all</h1>
                </div>
              </div>
            </div>
            <div class="MenuDeroulant">
              <nav>
                <ul>
                  <li class="menu-instruments"><a href="">Instruments</a>
                      <ul class="sousmenu">
                        <li><a href="#">Instruments à Cordes</a></li>
                        <li><a href="#">Instruments à Vents</a></li>
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
          </div>
      </div>
      </header>

  </body>
</html>
