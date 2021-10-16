<?php

isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? include_once "../view/public/" . $_GET['p'] . ".php" : include "../view/public/homepage.php";
