<?php
?>
<main>
    <label for="message">
        <?php
        if (empty($_POST) || isset($mailError)) {
        ?>
            <video muted class="mailE">
                <source src="./assets/img/mail_1.mp4" type="video/mp4">
            </video>
        <?php
        } elseif (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) && isset($_POST["user_name"]) && isset($_POST["user_mail"]) && isset($_POST["user_message"])) {
        ?>
            <video autoplay muted class="mailS">
                <source src="./assets/img/mail_2.mp4" type="video/mp4">
            </video>
        <?php
        } else {
        ?>
            <video muted class="mailE">
                <source src="./assets/img/mail_1.mp4" type="video/mp4">
            </video>
        <?php
        }
        ?>
    </label>
    <h1 class="contact portfolioFont mainColor">Contact</h1>
    <img class="contactImg" src="./assets/img/mail.png" alt="mail" />
    <article>
        <form method="POST" action="" class="contactForm">
            <?php
            if (isset($mailError)) {
            ?>
                <div class="wrong" id="wrong">
                    <div onclick="document.getElementById('wrong').style.display='none';" id="cross"></div>
                    <p>Your mail was not successfully delivered! </br>Please retry!</p>
                </div>
            <?php
            }
            ?>
            <div>
                <label for="name">Nom:</label>
                <input id="name" type="text" name="user_name" placeholder="Enter your name" required />
            </div>
            <div>
                <label for="mail">E-mail:</label>
                <input id="mail" type="text" name="user_mail" placeholder="Enter your mail" required />
            </div>
            <div>
                <label for="message">Votre message:</label>
                <textarea id="message" type="textarea" name="user_message" placeholder="Enter your message" oninput="mailEdit()" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="<?= CAPTCHA_USER_CONTACT ?>"></div>
            <div class="buttonContact">
                <input type="submit" value="Envoyer" />
            </div>
        </form>
    </article>
</main>