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
    <link href="./assets/style.css" rel="stylesheet" />
    <title>
        PortFolio |
        <?php echo isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "Accueil"; //change title with pages
        ?>
    </title>
</head>

<body>
    <?php
    if (isset($_SESSION)) {
    } else {
        require "../view/public/publicNav.php";
    } // => to ternary when session logic is done
    ?>
    <?php
    require "../controller/checkPages.php";
    ?>
    <footer>
        <p>Réalisé par Quentin Fayt | 2021</p>
    </footer>
    <script src="./assets/script.js"></script>
</body>

</html>