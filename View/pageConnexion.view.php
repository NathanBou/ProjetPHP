<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
  </head>
  <body>
    <div class="img">
      <img src="models/logo.jpg" alt="LOGO" width="238" height="153">
    </div>
    <h1>Authentification</h1>
    <form class="" action="../controler/connexion.controler.php" method="post">
      <?php echo $erreur ?>
      <div class="lab">
        <label for="username">Nom d'utilisateur</label>
      </div>
      <div class="inp">
        <input id="username" name="username" class="required" tabindex="1" accesskey="u" value="" size="25" autocomplete="off" type="text">
      </div>
      <div class="lab">
        <label for="password">Mot de passe</label>
      </div>
      <div class="inp">
        <input id="password" name="password" class="required" tabindex="2" accesskey="p" value="" size="25" autocomplete="off" type="password">
      </div>
      <br>
      <div class="boutons">
        <input type="reset" name="Effacer" value="Effacer">
        <input type="submit" name="Connexion" value="Connexion">
      </div>
    </form>
    <div class="image home">
      <a href="../controler/main.controler.php"><img src="models/home.png" alt="Menu" height="100"  width="100"></a>
    </div>
  </body>
</html>
