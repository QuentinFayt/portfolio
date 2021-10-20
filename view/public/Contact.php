<?php
?>
<main>
    <label for="message">
        <?php
        if (!$_POST) {
        ?>
            <video muted class="mailE">
                <source src="./assets/img/mail_1.mp4" type="video/mp4">
            </video>
        <?php
        } else {
        ?>
            <video autoplay muted class="mailS">
                <source src="./assets/img/mail_2.mp4" type="video/mp4">
            </video>
        <?php
        }
        ?>
    </label>
    <h1 class="contact">Contact</h1>
    <img class="contactImg" src="./assets/img/mail.png" alt="mail" />
    <article>
        <form method="POST" action="">
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
            <div class="button">
                <input type="submit" value="Envoyer" />
            </div>
        </form>
    </article>
</main>