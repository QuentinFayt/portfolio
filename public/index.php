<?php
session_start();

require_once "../config/config.php";

require '../model/PHPMailer/src/Exception.php';
require '../model/PHPMailer/src/PHPMailer.php';
require '../model/PHPMailer/src/SMTP.php';

include "../controller/helper.php";

require_once "../model/datasFromDB.php";

include "../controller/login.php";

include "../controller/mail.php";

require_once "../view/public/head.php";
require_once isset($_SESSION["idSession"]) ? "../view/private/privateNav.php" : "../view/public/publicNav.php";
if (isset($_SESSION["idSession"])) {
    if (isset($_GET["private"])) {
        include_once isset($_GET["p"]) && in_array($_GET["p"], ADMIN_WL) ?  "../view/private/" . $_GET['p'] . ".php" : "../view/public/homepage.php";
    } else {
        include_once isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ?  "../view/public/" . $_GET['p'] . ".php" : "../view/public/homepage.php";
    }
} else {
    include_once isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ?  "../view/public/" . $_GET['p'] . ".php" : "../view/public/homepage.php";
}

require_once "../view/public/footer.php";
