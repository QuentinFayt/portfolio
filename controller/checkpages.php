<?php

include_once isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ?  "../view/public/" . $_GET['p'] . ".php" : "../view/public/homepage.php";
