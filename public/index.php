<?php
require_once "../config/config.php";

include "../controller/mail.php";

require "../view/public/head.php";
if (isset($_SESSION)) {
} else {
    require "../view/public/publicNav.php";
} // => to ternary when session logic is done


include_once isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ?  "../view/public/" . $_GET['p'] . ".php" : "../view/public/homepage.php";

require "../view/public/footer.php";
