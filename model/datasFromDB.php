<?php

$DB = mysqli_connect(HOST, USER, PWD, NAME, PORT);
if (!$DB) {
    die(utf8_encode(mysqli_connect_error()));
}

mysqli_set_charset($DB, "utf8");

$selectSQL = "SELECT * FROM `portfolio_guestbook`;";

$selectionQuery = mysqli_query($DB, $selectSQL) or die(mysqli_error($DB));

if (!empty(mysqli_num_rows($selectionQuery))) {
    $messages = mysqli_fetch_all($selectionQuery, MYSQLI_ASSOC);
}

if (isset($_POST["userGuestBookName"]) && isset($_POST["userGuestBookText"])) {

    $insertPseudo = htmlspecialchars(strip_tags(trim($_POST["userGuestBookName"])), ENT_QUOTES);
    $insertMSG = htmlspecialchars(strip_tags(trim($_POST["userGuestBookText"])), ENT_QUOTES);

    if (!empty($insertPseudo) && !empty($insertMSG) && strlen($insertPseudo) < 50 && strlen($insertMSG) < 370) {
        $insertSQL = "INSERT INTO `portfolio_guestbook`(`userGuestB`, `textGuestB`) VALUES ('$insertPseudo','$insertMSG');";
        mysqli_query($DB, $insertSQL);
        header("Location: ./");
    }
}
