<?php
?>
<main class="mainHomepage">
    <div class="title">
        <div class="svg">
            <?php
            include "./assets/img/logo.svg"
            ?>
        </div>
        <h1><span class="mainColor portfolioFont">Portfolio</span> | <span class="darkerMainColor">Accueil</span></h1>
    </div>
    <img src="./assets/img/triangle.png" class="profilePicM" draggable="false" />
    <article class="homepage">
        <img src="./assets/img/arrowUp.png" class="up" draggable="false" />
        <section class="presentation">
            <div class="check">
                <h3>Ma présentation:</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere neque sit amet
                    volutpat. Duis finibus interdum facilisis. Morbi vel sapien sed dolor hendrerit placerat id a dui. Integer
                    accumsan, arcu et rutrum efficitur, magna augue tempor quam, vel commodo diam nibh aliquam ex.
                    Curabitur odio leo, vulputate quis ligula vitae, venenatis aliquet lectus. In hac habitasse platea dictumst. Phasellus quis egestas lacus, sit amet dapibus diam. Donec nec ultrices metus.
                </p>
            </div>
        </section>
        <img src="./assets/img/triangle.png" class="profilePic" draggable="false" />
        <section class="portGuestbook">
            <div class="portGuestBookContainer">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                ?>
                        <div class="cell">
                            <h3>Message de <?= $message["userGuestB"] ?>:</h3>
                            <p><?= $message["textGuestB"] ?></p>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="cell">
                        <h3>Message de :</h3>
                        <p>No message yet</p>
                    </div>
                    <div class="cell">
                        <h3>Message de :</h3>
                        <p>No message yet</p>
                    </div>
                    <div class="cell">
                        <h3>Message de :</h3>
                        <p>No message yet</p>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <img src="./assets/img/arrowDown.png" class="down" draggable="false" />
    </article>
    <article class="articleGuestBook">
        <p class="formDisplay">Vous voulez rajouter un message sur mon portfolio?</p>
        <form class="formGuestBook" method="POST" action="">
            <div>
                <label for="guestBookName">Nom:</label>
                <input id="guestBookName" type="text" max="50" placeholder="Votre Nom (max 50 caractères)" name="userGuestBookName" required></input>
            </div>
            <div>
                <label for="guestBookText">Votre message:</label>
                <textarea id="guestBookText" type="textarea" max="370" name="userGuestBookText" placeholder="Votre message (max 370 caractères)" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="<?= CAPTCHA_USER ?>"></div>
            <div class="buttonGuestBook">
                <input type="submit" value="Envoyer" class="buttonGuestBook"></input>
            </div>
        </form>
    </article>
</main>