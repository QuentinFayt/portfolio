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
    <title>
        PortFolio |
        <?php echo isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "Accueil"; //change title with pages
        ?>
    </title>
</head>

<body>
    <img src="./assets/img/burger.png" alt="burger" class="burger" onclick="toggle()" />
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
        <a href="https://github.com/QuentinFayt">
            <img class="foot_log mobile1" src="./assets/img/github.png" alt="github" />
            <p>Github</p>
        </a>
        <a href="https://www.linkedin.com/in/quentin-fayt-6714b9174/">
            <img class="foot_log mobile2" src="./assets/img/linkedin.png" alt="linkedin" />
            <p>Linkedin</p>
        </a>
        <p class="right mobile3">Réalisé par Quentin Fayt | 2021</p>
    </footer>
    <script src="./assets/script.js"></script>
</body>

</html>