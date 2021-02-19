<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register.css">
    <link rel="icon" href="../images/index.png">
    <title>Simply-Count Register</title>
</head>

<body>
    <?php
    require '../includes/functions.php';
    $message = "OK";
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 01:
                $message = "Vous avez deux mot de passe differents";
                break;
            case 02:
                $message = "Cette addresse email est déjà lié à un compte";
                break;
            case 03:
                $message = "Ce nom d'utilisateur est déjà utilisé";
                break;
            case 04:
                $message = "Un problème de connexion est survenu";
                break;
        }
    }
    if (isset($_POST['register'])) {
        if (pwdNotMatch($_POST['pass'], $_POST['pwdrepeat'])) {
            header("location: register.php?error=01");
            exit();
        }
        if (emailExists($_POST['email'])) {
            header("location: register.php?error=02");
            exit();
        }
        if (userNameExists($_POST['username'])) {
            header("location: register.php?error=03");
            exit();
        }



        $hashedPwd = password_hash($_POST['pass'], PASSWORD_DEFAULT);


        if (creatUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['username'], $hashedPwd)) {
            header("location: ../index.php?registered");
        } else {
            header("location: register.php?error=04");
            exit();
        }
    }
    ?>


    <form action="" method="POST">
        <h3>Inscrivez vous</h3>
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
        <input type="text" name="lastname" placeholder="Nom" required>
        <input type="text" name="firstname" placeholder="Prenom(s)" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="username" placeholder="Nom s'utilisateur" required>
        <input type="password" name="pass" placeholder="Mot de passe" required>
        <input type="password" name="pwdrepeat" placeholder="Mot de passe" required>
        <button type="submit" name="register">S'inscrire</button>
        <a href="../index.php">Ou se connecter</a>

    </form>

    <script src="../script/register.js"></script>
</body>

</html>