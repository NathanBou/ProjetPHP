<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music-all</title>
  </head>
  <body>
      <header>
        <div class="MainMenu">
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
          <div class="Menu">
            <ul>
              <li class="menu-instruments"><a href="">Instruments</a>
                  <ul class="Sous-menu">
                    <li>Instruments à Cordes</li>
                    <li>Instruments à Vents</li>
                    <li>Percussions</li>
                  </ul>
              </li>
              <li class="menu-accessoires"><a href="#">Accessoires</a>
                  <ul class="=Sous-menu">
                    <li>Mediator</li>
                    <li>Bec</li>
                    <li>Cordes</li>
                    <li>Pupitre</li>
                    <li>Diapason</li>
                    <li>Accordeur</li>
                  </ul>
              </li>
              <li class="menu-partitions"><a href="#">Partitions</a>
                <ul class="Sous-menu">
                  <li>Bach</li>
                  <li>Mozart</li>
                  <li>Chopin</li>
                  <li>Vivaldi</li>
                  <li>Ravel</li>
                  <li>Beethoven</li>
                  <li>Schubert</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

      </header>

  </body>
</html>
