<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/form.css">
  <title>Document</title>
</head>

<body>
  <?php
  $dat = new mysqli("localhost", "root", "", "liste");
  ?> 
  <div>

    <form action="" method="POST">
      <div class="form">
        <img src="images/person.png" alt="">
        <?php
        if (!empty($_POST["submit"]) && $dat->query("INSERT INTO `apprenants` SET `nom`='{$_POST['nom']}', `prenom`='{$_POST['prenom']}', `mail`='{$_POST['mail']}', `naissance`='{$_POST['naissance']}', `formation`='{$_POST['formation']}', `sexe`='{$_POST['sexe']}'")) {
          echo ("<div id=alert>
        <p>Données enregistrées</p>
      </div>");
        }

        ?>

        <div>

          <!--<label for="nom" class="blocklab">Nom:</label>-->
          <input type="text" class="textinput" title="Lettres minuscules et/ou majuscules" pattern="[A-Za-z]{1,}" name="nom" placeholder="Nom" required>
        </div>
        <div>
          <!--<label for="" class="blocklab">Prenom:</label>-->
          <input type="text" class="textinput" title="Lettres minuscules et/ou majuscules" pattern="[A-Za-z]{1,}" name="prenom" placeholder="Prenom" required>
        </div>
        <div>
          <!--<label for="" class="blocklab">E-mail:</label>-->
          <input type="email" class="textinput" name="mail" placeholder="E-mail" required>
        </div>
        <div>
          <label for="date" class="blocklab">Date de naissance:</label>
          <input type="date" value="" id="date" name="naissance" required>
        </div>
        <div>
          <label for="">Sexe:</label>
          <div>

            <input type="radio" name="sexe" class="radioinput" value="Homme" required>
            <label for="">Homme</label>

            <input type="radio" name="sexe" class="radioinput" value="Femme" required>
            <label for="">Femme</label>

          </div>
          <label for="">Module de formation:</label>
          <div>
            <input type="radio" name="formation" value="DEV" class="radioinput" required>
            <label for="">Dev web et mobile</label>

            <input type="radio" name="formation" value="REF" class="radioinput" required>
            <label for="">Referent digital</label>

          </div>
        </div>
        <button type="submit" name="submit" value="submit">Ajouter</button>
        <button type="reset" id="reset">Effacer</button>
      </div>
    </form>
  </div>
  <script src="script/forms.js"></script>
</body>

</html>