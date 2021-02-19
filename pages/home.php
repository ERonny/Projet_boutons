<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <?php
    $db = new mysqli("localhost", "root", "", "liste");
    $ret_tot = $db->query("SELECT * FROM `apprenants`");
    $ret_man = $db->query("SELECT * FROM `apprenants` WHERE `sexe`='Homme'");
    $ret_wom = $db->query("SELECT * FROM `apprenants` WHERE `sexe`='Femme'");
    $totNumb = $ret_tot->num_rows;
    $totManNumb = $ret_man->num_rows;
    $totWomNumb = $ret_wom->num_rows;

    $ret_dev = $db->query("SELECT * FROM `apprenants` WHERE `formation`='DEV'");
    $ret_dev_man = $db->query("SELECT * FROM `apprenants` WHERE `formation`='DEV' AND `sexe`='Homme'");
    $ret_dev_wom = $db->query("SELECT * FROM `apprenants` WHERE `formation`='DEV' AND `sexe`='Femme'");
    $devNumb = $ret_dev->num_rows;
    $devManNumb = $ret_dev_man->num_rows;
    $devWomNumb = $ret_dev_wom->num_rows;

    $ret_ref = $db->query("SELECT * FROM `apprenants` WHERE `formation`='REF'");
    $ret_ref_man = $db->query("SELECT * FROM `apprenants` WHERE `formation`='REF' AND `sexe`='Homme'");
    $ret_ref_wom = $db->query("SELECT * FROM `apprenants` WHERE `formation`='REF' AND `sexe`='Femme'");
    $refNumb = $ret_ref->num_rows;;
    $refManNumb = $ret_ref_man->num_rows;
    $refWomNumb = $ret_ref_wom->num_rows;

    ?>
    <div class="mainDiv">
        <div class="">
            <img src="../images/logo-simplon.png" alt="" width="20%">
        </div>
        <div class="top">
            <div class="statCard">
                <h4>Nombre d'inscrits :<span id="totNumb"><?php echo ($totNumb); ?></span></h4>
                <div class="stat">
                    <p>Hommes : <span id="totManNumb"><?php echo ($totManNumb); ?></span>
                        <span class="statImg"><img src="../images/statRect.png" alt=""> <img src="../images/statRectBck.png" alt="" id="totManNumbImg"></span>
                    </p>
                    <p>Femmes : <span id="totWomNumb"><?php echo ($totWomNumb); ?></span> <span class="statImg"><img src="../images/statRect.png" alt=""><img src="../images/statRectBck.png" alt="" id="totWomNumbImg"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="top">
            <div class="statCard">
                <h4>Dévellopement Web : <span id="devNumb"><?php echo ($devNumb); ?></span></h4>
                <div class="stat">
                    <p>Hommes :<span id="devManNumb"><?php echo ($devManNumb); ?></span>
                        <span class="statImg"><img src="../images/statRect.png" alt=""> <img src="../images/statRectBck.png" alt="" id="devManNumbImg"></span>
                    </p>
                    <p>Femmes :<span id="devWomNumb"><?php echo ($devWomNumb); ?></span> <span class="statImg"><img width="150px" src="../images/statRect.png" alt=""><img src="../images/statRectBck.png" alt="" id="devWomNumbImg"></span>
                    </p>
                </div>
            </div>
            <div class="statCard">
                <h4>Référence digital :<span id="refNumb"><?php echo ($refNumb); ?></span></h4>
                <div class="stat">
                    <p>Hommes :<span id="refManNumb"><?php echo ($refManNumb); ?></span>
                        <span class="statImg"><img src="../images/statRect.png" alt=""> <img src="../images/statRectBck.png" alt="" id="refManNumbImg"></span>
                    </p>
                    <p>Femmes :<span id="refWomNumb"><?php echo ($refWomNumb); ?></span> <span class="statImg"><img width="150px" src="../images/statRect.png" alt=""><img src="../images/statRectBck.png" alt="" id="refWomNumbImg"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../script/home.js"></script>
</body>

</html>