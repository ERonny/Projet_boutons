<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/liste.css">
    <title>Document</title>
</head>

<body>
    <?php
    $dat = new mysqli("localhost", "root", "", "liste");
    ?>
    <div class="form">
        <form action="" method="POST">
            <input type="text" name="search" placeholder="Rechercher">
            <button type="submit" name="submit" value="submit">Rechercher</button>
        </form>
    </div>
    <div class="main"> <!-- Début de la liste  des developpeurs-->
        <h3>Developpement Web et Web Mobile</h3>
        <?php

        ?>

        <?php

        if (empty($_POST["submit"])) {
            $ret_dev = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='DEV' ORDER BY `nom`");
            while ($data = $ret_dev->fetch_array()) {
                echo ("<table  class=tablebody>");
                echo ("<tbody>
        <td>
         <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
        <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
       <h6>" . $data["mail"] . "</h6>
      </td>" . "<td>
      <h6>" . $data["sexe"] . "</h6>".
                     //Modifier
      "<td>    
       <button><a href=pages/Modification.php?email=".$data["mail"]. "&nom=".$data["nom"]. "&prenom=".$data["prenom"]. "&sexe=".$data["sexe"]. ">Modifier</a></button>
     </td>". 
                    //Details 
     "<td>                                   
      <button><a href=details.php?email=".$data["mail"]. "&nom=".$data["nom"]. "&prenom=".$data["prenom"]. "&sexe=".$data["sexe"].">Détails</a></button>
     </td>".
                   //Supprimer 
     "<td>                                    
      <button><a href=supprimer.php?email=".$data['mail'].">Supprimer</a></button>
     </td>".
     "</td>" . "</tbody>");
     
                echo ("</table>");
            }
        } else {
            $ret_dev = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='DEV' ORDER BY `nom`");
            while ($data = $ret_dev->fetch_array()) {
                if (similar_text($data["nom"], $_POST["search"]) >= 3 || similar_text($data["prenom"], $_POST["search"]) >= 3) {
                    echo ("<table  class=tablebody>");
                    echo ("<tbody>
        <td>
         <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
        <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
       <h6>" . $data["mail"] . "</h6>
      </td>" . "<td>
      <h6>" . $data["sexe"] . "</h6>
      <td>".
      " <button class=btm>Modifier</button>
     </td>".
      
     "<td>                                   
     <button>Détails</button>
    </td>".
    
    "<td>                                    
     <button>Supprimer</button>
    </td>".

     " </td>" . "</tbody>");
                    echo ("</table>");
                }
            }
        }
        ?>

    </div> <!-- Fin Liste des developpeurs -->

    <div class="main"><!-- début Liste REF DIGITAL-->
        <h3>Referencement Digital</h3>
        <?php
        $ret_ref = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='REF' ORDER BY `nom`");
        ?>

        <?php
        if (empty($_POST["submit"])) {
            $ret_ref = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='REF' ORDER BY `nom`");
            while ($data = $ret_ref->fetch_array()) {
                echo ("<table  class=tablebody>");
                echo ("<tbody>
        <td>
         <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
        <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
       <h6>" . $data["mail"] . "</h6>
      </td>" . "<td>
      <h6>" . $data["sexe"] . "</h6>
     </td>" 
     ."<td>                                       
       <button>Modifier</button>
     </td>".

     "<td>                                   
      <button>Détails</button>
     </td>".
     
     "<td>                                    
      <button>Supprimer</button>
     </td>".

      "</tbody>");
                echo ("</table>");
            }
        } else {
            $ret_ref = $dat->query("SELECT * FROM `apprenants` WHERE `formation`='REF' ORDER BY `nom`");
            while ($data = $ret_ref->fetch_array()) {
                if (similar_text($data["nom"], $_POST["search"]) >= 3 || similar_text($data["prenom"], $_POST["search"]) >= 3) {
                    echo ("<table  class=tablebody>");
                    echo ("<tbody>
        <td>
         <h6>" . $data["nom"] . "</h6>
        </td>" . "<td>
        <h6>" . $data["prenom"] . "</h6>
       </td>" . "<td>
       <h6>" . $data["mail"] . "</h6>
      </td>" . "<td>
      <h6>" . $data["sexe"] . "</h6>
     </td>" . 
     "<td>                                    
      <button>Modifier</button>
     </td>".

     "<td>                                    
      <button>Détails</button>
     </td>".


     "<td>                                    
      <button>Supprimer</button>
     </td>".
     "</tbody>");
                    echo ("</table>");
                }
            }
        }
        ?>
    </div> <!--Fin Liste REF DIGITAL-->
    <script src="script/liste.js"></script>
</body>

</html>