<?php
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $googleUrlCatpcha = 'https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_SERVER_CONTACT . '&response=' . $_POST['g-recaptcha-response'];
    $verifyRecaptcha = curlRequest($googleUrlCatpcha);
    $decodeGoogleAnswer = json_decode($verifyRecaptcha, true);
    if ($decodeGoogleAnswer["success"]) {
        if (isset($_POST["user_name"]) && isset($_POST["user_mail"]) && isset($_POST["user_message"])) {
            $pseudo =  strip_tags($_POST["user_name"]);
            $mail = strip_tags($_POST["user_mail"]);
            $message =  strip_tags($_POST["user_message"]);
            if ($pseudo && $mail && $message) {

                $toDev      = MAIL;
                $subjectDev = "Message de " . $pseudo . " | Portfolio";
                $messageDev = "Mail de l'utilisateur $pseudo : " . $mail . "\n" . $message;
                $headersToDev =
                    'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
                    'From: ' . $mail  . "\r\n" .
                    'Reply-To: ' . $mail  . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $toUsers = $mail;
                $subjectUsers = "Quentin Fayt | Portfolio";
                $messageUsers = "Merci $pseudo pour votre message!\nJe vous recontacte dans les plus brefs délais!\nBien à vous,\nQuentin Fayt";
                $headersToUsers =
                    'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
                    'From: ' . MAIL . "\r\n" .
                    'Reply-To: ' . MAIL . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($toDev, $subjectDev, $messageDev, $headersToDev);
                mail($toUsers, $subjectUsers, $messageUsers, $headersToUsers);
            }
        }
    }
}
