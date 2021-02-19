
<?php                         //connexion à la bdd

use function PHPSTORM_META\map;

$host = "localhost";
$user = "root";
$pwd = "";
$base = "liste";
$database = new mysqli($host, $user, $pwd, $base);

$email= $_GET['email'];
$nom= $_GET['nom'];
$prenom= $_GET['prenom'];
$sexe= $_GET['sexe'];
 if(isset($_POST['Update'])){
     mysqli_query  ( $database, " UPDATE apprenants SET  mail='".$_POST['email']."',nom='".$_POST['lastname']."',prenom ='".$_POST['firstname']."',sexe ='".$_POST['sexe']."'  WHERE  mail='".$_POST['email']."'" );
   
 }

/*$stmt= $database ->prepare("UPDATE FROM apprenants SET mail,nom,prenom,sexe=?,?,?,?");
$stmt ->bind_param("s,s,s,s",$_GET['mail']);
$stmt ->execute();*/


    ?>
 
    <!DOCTYPE html> 
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modification</title>
        
        <link rel="stylesheet" href="styles/register.css">
        <link rel="icon" href="images/index.png">
    </head>
    <body>

    <h3>MODIFICATION</h3>
       
    <form action="" method="post">
        
        <input type="text" name="lastname" placeholder="Nom" required value="<?php echo $nom; ?>">
        <input type="text" name="firstname" placeholder="Prenom(s)" required value="<?php echo $prenom; ?>">
        <input type="email" name="email" placeholder="E-mail" required value="<?php echo $email; ?>">
        <input type="text" name="sexe" placeholder="Nom s'utilisateur" required value="<?php echo $sexe; ?>">
        
        <input type="submit" name="Update" value=" Modifier">

       

    </form>

    
    </body>
    </html>