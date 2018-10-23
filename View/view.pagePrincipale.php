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
              <a href="PBShoppingCart.asp?PBMInit=1">
                <span class="prixPanier"> <?= $prixPanier ?> € </span>
              </a>
            </div>
            <div class="ligne2">
              <h1>Music-all</h1>
            </div>
          </div>
        </div>

      </header>

  </body>
</html>
