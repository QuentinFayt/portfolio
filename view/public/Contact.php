<?php
?>
<main>
    <h1>Contact</h1>
    <section>
        <form method="POST" action="index.php">
            <div>
                <label for="name">Nom:</label>
                <input id="name" type="text" name="user_name" placeholder="Enter your name" />
            </div>
            <div>
                <label for="mail">E-mail:</label>
                <input id="mail" type="text" name="user_mail" placeholder="Enter your mail" />
            </div>
            <div>
                <label for="message">Votre message:</label>
                <textarea id="message" type="textarea" name="user_message" placeholder="Enter your message"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Envoyer" />
            </div>
        </form>
    </section>
</main>