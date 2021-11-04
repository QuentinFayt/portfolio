<?php
?>
<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once "./assets/fonts/fonts.php";
    ?>
    <link rel="icon" href="./assets/img/logo.ico" />
    <link href="./assets/style.css" rel="stylesheet" />
    <script src='https://www.google.com/recaptcha/api.js' defer async></script>
    <script src="./assets/script.js" defer></script>
    <title>
        PortFolio |
        <?php
        if (isset($_SESSION["idSession"])) {
            if (isset($_GET["private"])) {
                echo isset($_GET["p"]) && in_array($_GET["p"], ADMIN_WL) ? $_GET["p"] : "Accueil";
            } else {
                echo isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "Accueil";
            }
        } else {
            echo isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "Accueil";
        }
        ?>
    </title>
</head>

<body>
    <div class="burger" onclick="toggle()">
        <?php
        include "./assets/img/burger.php";
        ?>
    </div>