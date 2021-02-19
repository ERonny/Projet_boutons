<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/index.png">
    <title>Simply-Count Home</title>
</head>

<body>
    <div id="mainDiv">


        <nav>
            <button type="button" class="navItem activeItem" disabled id="home">
                <div>
                    <h1>S</h1>
                    <h6>Stats</h6>
                </div>
            </button>

            <button type="button" class="navItem" id="add">
                <div>
                    <h1>A</h1>
                    <h6>Ajouter</h6>
                </div>
            </button>

            <button type="button" class="navItem" id="list">
                <div>
                    <h1>L</h1>
                    <h6>Liste</h6>
                </div>
            </button>
            <!--
            <button type="button" class="navItem" id="trash">
                <div>
                    <h1>C</h1>
                    <h6>Corbeille</h6>
                </div>
            </button>-->
        </nav>
        <section id="info">
            <iframe id="page" src="pages/home.php" frameborder="0">

            </iframe>
        </section>
    </div>


    <script src="app.js"></script>
</body>

</html>