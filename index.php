<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="icon" href="images/index.png">
    <title>Simply-Count Login</title>
</head>

<body>
    <?php
    require 'includes/functions.php';
    $message = "OK";
    if (isset($_POST['register'])) {
        if (userConnect($_POST['username'], $_POST['pwd'])) {
            header("location: home.php");
        } else {
            header("location: index.php?error=05");
        }
    }
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 05:
                $message = "Identifiants ou mot de passe incorrect";
                break;
        }
    }
    ?>

    <form action="" method="POST">
        <h3>Connectez vous</h3>
        <?php
        if (isset($_GET['error'])) {
            echo "
            <center>
            <div class=warning>
                <h3>" . $message . "</h3>
             </div>
             </center>";
        }
        ?>
        <input type="text" name="username" placeholder="Email ou nom d'utilisateur" required>
        <input type="password" name="pwd" placeholder="Mot de passe" required>
        <button type="submit" name="register">Se connecter</button>
        <a href="pages/register.php">Ou s'inscrire</a>

    </form>

    <script src="script/register.js"></script>
</body>

</html>