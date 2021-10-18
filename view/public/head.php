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
    <script src="./assets/script.js" defer></script>
    <title>
        PortFolio |
        <?php echo isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "Accueil"; //change title with pages
        ?>
    </title>
</head>

<body>
    <img src="./assets/img/burger.png" alt="burger" class="burger" onclick="toggle()" />