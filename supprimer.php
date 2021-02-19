
<?php 
$host = "localhost";
$user = "root";
$pwd = "";
$base = "liste";
$database = new mysqli($host, $user, $pwd, $base);
$data= $_GET['email'];
$stmt= $database ->prepare("DELETE FROM apprenants WHERE mail=?");
$stmt ->bind_param("s",$data);
$stmt ->execute();
header("listes.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> BOUNJOUR LE MONDE!</h4>
</body>
</html>
   