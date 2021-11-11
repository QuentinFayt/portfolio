<?php

$DB = mysqli_connect(HOST, USER, PWD, NAME, PORT);
if (!$DB) {
    die(utf8_encode(mysqli_connect_error()));
}

mysqli_set_charset($DB, "utf8");

$selectSQL = "SELECT * FROM `portfolio_guestbook` WHERE `validation` = 1 ORDER BY id DESC;";
$selectAdminSQL = "SELECT * FROM `portfolio_guestbook` ORDER BY id DESC;";

$selectionQuery = mysqli_query($DB, $selectSQL) or die(mysqli_error($DB));
$selectionAdminQuery = mysqli_query($DB, $selectAdminSQL) or die(mysqli_error($DB));

if (!empty(mysqli_num_rows($selectionQuery))) {
    $messages = mysqli_fetch_all($selectionQuery, MYSQLI_ASSOC);
}
if (!empty(mysqli_num_rows($selectionAdminQuery))) {
    $messagesAdmin = mysqli_fetch_all($selectionAdminQuery, MYSQLI_ASSOC);
}
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $googleUrlCatpcha = 'https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_SERVER . '&response=' . $_POST['g-recaptcha-response'];
    $verifyRecaptcha = curlRequest($googleUrlCatpcha);
    $decodeGoogleAnswer = json_decode($verifyRecaptcha, true);
    if ($decodeGoogleAnswer["success"]) {
        if (isset($_POST["userGuestBookName"]) && isset($_POST["userGuestBookText"])) {

            $insertPseudo = htmlspecialchars(strip_tags(trim($_POST["userGuestBookName"])), ENT_QUOTES);
            $insertMSG = htmlspecialchars(strip_tags(trim($_POST["userGuestBookText"])), ENT_QUOTES);

            if (!empty($insertPseudo) && !empty($insertMSG) && strlen($insertPseudo) < 50 && strlen($insertMSG) < 370) {
                $insertSQL = "INSERT INTO `portfolio_guestbook`(`userGuestB`, `textGuestB`) VALUES ('$insertPseudo','$insertMSG');";
                mysqli_query($DB, $insertSQL);
                mail(MAIL, "Nouveau message d'un utilisateur sur le portfolio!", "Tu as reçu un nouveau message pour la page d'accueil! Va voir ta base de donnée!", 'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
                    'From: ' . "Portfolio" . "\r\n" .
                    'Reply-To: ' . "none" . "\r\n" .
                    'X-Mailer: PHP/' . phpversion());
                header("Location: ./");
            }
        }
    }
}
if (isset($_POST["deleteId"])) {
    $textid = (int) $_POST["deleteId"];
    $deleteSQL = "DELETE FROM portfolio_guestbook WHERE id='$textid';";

    mysqli_query($DB, $deleteSQL);
    header("Location: ./?p=Edit&private=true");
}
if (isset($_POST["updateTextId"])) {
    $textId = (int) $_POST["updateTextId"];
    $updatedtext = htmlspecialchars(strip_tags(trim($_POST["updateText"])), ENT_QUOTES);
    if (!empty($updatedtext)) {
        $updateSQL = "UPDATE portfolio_guestbook SET textGuestB = '$updatedtext' WHERE id=$textId;";
        mysqli_query($DB, $updateSQL);
    }
    header("Location: ./?p=Edit&private=true");
}
if (isset($_POST["validate"])) {
    $textId = (int) $_POST["validate"];
    $updateSQL = "UPDATE portfolio_guestbook SET `validation` = 1 WHERE id=$textId;";
    mysqli_query($DB, $updateSQL);

    header("Location: ./?p=Edit&private=true");
}
if (isset($_POST["Unvalidate"])) {
    $textId = (int) $_POST["Unvalidate"];
    $updateSQL = "UPDATE portfolio_guestbook SET `validation` = 0 WHERE id=$textId;";
    mysqli_query($DB, $updateSQL);

    header("Location: ./?p=Edit&private=true");
}
