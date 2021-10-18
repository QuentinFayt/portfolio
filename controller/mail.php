<?php
if ($_POST) {
    $toDev      = MAIL;
    $subjectDev = "Message de " . $_POST["user_name"] . " | Portfolio";
    $messageDev = "Mail de l'utilisateur : " . $_POST["user_mail"] . "\n" . $_POST["user_message"];
    $headersToDev =
        'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
        'From: ' . $_POST["user_mail"] . "\r\n" .
        'Reply-To: ' . $_POST["user_mail"] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $toUsers = $_POST["user_mail"];
    $subjectUsers = "Quentin Fayt | Portfolio";
    $messageUsers = "Merci pour votre message!\nJe vous recontacte dans les plus brefs délais!\nBien à vous,\nQuentin Fayt";
    $headersToUsers =
        'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
        'From: ' . MAIL . "\r\n" .
        'Reply-To: ' . MAIL . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($toDev, $subjectDev, $messageDev, $headersToDev);
    mail($toUsers, $subjectUsers, $messageUsers, $headersToUsers);
}
