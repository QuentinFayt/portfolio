<?php
if ($_POST) {
    $to      = MAIL;
    $subject = "Message de " . $_POST["user_name"] . " | Portfolio";
    $message = "Mail de l'utilisateur : " . $_POST["user_mail"] . "\n" . $_POST["user_message"];

    mail($to, $subject, $message);
    mail($_POST["user_mail"], "Quentin Fayt | Portfolio", "Merci pour votre message!\nJe vous recontacte dans les plus brefs délais!\n Bien à vous,\nQuentin Fayt");
}
