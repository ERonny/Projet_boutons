<?php


$email= $_GET['email'];
$nom= $_GET['nom'];
$prenom= $_GET['prenom'];
$sexe= $_GET['sexe'];

   


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

    <h3>Inscrivez vous</h3>
       
    <table>
    
        
    <tr> <td> nom </td><td> <?php echo $nom; ?> </td> </tr>
    <tr> <td> prenom </td> <td>  <?php echo $prenom; ?> </td> </tr>
    <tr> <td>mail </td> <td><?php echo $email; ?></td> </tr>
    <tr> <td>sexe</td> <td><?php echo $sexe; ?></td> </tr>
        
    


     </table>

    
    </body>
    </html>