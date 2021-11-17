<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $googleUrlCatpcha = 'https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_SERVER_CONTACT . '&response=' . $_POST['g-recaptcha-response'];
    $verifyRecaptcha = curlRequest($googleUrlCatpcha);
    $decodeGoogleAnswer = json_decode($verifyRecaptcha, true);
    if ($decodeGoogleAnswer["success"]) {

        if (isset($_POST["user_name"]) && isset($_POST["user_mail"]) && isset($_POST["user_message"])) {
            $pseudo =  strip_tags(trim($_POST["user_name"]));
            $userMail = filter_var(strip_tags(trim($_POST["user_mail"])), FILTER_VALIDATE_EMAIL);
            $message =  strip_tags(trim($_POST["user_message"]));
            if ($pseudo && $userMail && $message) {
                $mail = new PHPMailer;

                $mail->IsSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Username = MAIL;
                $mail->Password = MDP;

                $mail->setFrom($userMail, $pseudo);
                $mail->addAddress(MAIL, "Quentin");
                $mail->CharSet = 'UTF-8';
                $mail->Subject  = "Message de $pseudo";
                $mail->Body     = $message;

                $mail->send();
                /* if (!$mail->send()) {
                    echo 'Message was not sent.';
                    echo 'Mailer error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent.';
                } */

                $mail = new PHPMailer;

                $mail->IsSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Username = MAIL;
                $mail->Password = MDP;

                $mail->setFrom(MAIL, 'Quentin');
                $mail->addAddress($userMail, $pseudo);
                $mail->CharSet = 'UTF-8';

                $mail->Subject  = "Accusé de réception | Portfolio Quentin Fayt";
                $mail->Body     = "Merci $pseudo pour votre message!\nJe vous recontacte dans les plus brefs délais!\nBien à vous,\nQuentin Fayt";

                $mail->send();
            } else {
                $mailError = true;
            }
        }
    }
}
