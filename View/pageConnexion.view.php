<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
  </head>
  <body>
    <div class="img">
      <a href="../controler/main.controler.php">
        <img src="../View/models/logo.jpg" alt="LOGO" width="238" height="153">
      </a>
    </div>
    <h1>Authentification</h1>
    <form class="" action="../controler/connexion.controler.php" method="post">
      <?php if (isset($erreur)){echo $erreur;} ?>
      <div class="lab">
        <label for="username">Nom d'utilisateur</label>
      </div>
      <div class="inp">
        <input id="username" name="username" type="text" required tabindex="1" accesskey="u" value="" size="25" autocomplete="off" >
      </div>
      <div class="lab">
        <label for="password">Mot de passe</label>
      </div>
      <div class="inp">
        <input id="password" name="password" type="password" required tabindex="2" accesskey="p" value="" size="25" autocomplete="off" >
      </div>
      <br>
      <div class="boutons">
        <input type="reset" name="Effacer" value="Effacer">
        <input type="submit" name="Connexion" value="Connexion">
      </div>
    </form>
    <div class="image home">
      <a href="../controler/main.controler.php"><img src="../View/models/home.png" alt="Menu" height="100"  width="100"></a>
    </div>
  </body>
</html>
