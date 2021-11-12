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
    <img src="./assets/img/pic.png" class="profilePicM" draggable="false" />
    <article class="homepage">
        <img src="./assets/img/arrowUp.png" class="up" draggable="false" />
        <section class="presentation">
            <div class="check">
                <h3>La <span class="mainColor">curiosité</span> est-elle vraiment un vilain défaut?</h3>
                <p>
                    Après le développement de plusieurs projets, je me suis souvent posé des questions sur tel ou tel concept/technologie. Au point de souvent être considéré comme trop <span class="mainColor">curieux<span>.
                </p>
                <p>
                    Mais je pense que c'est justement ma <span class="mainColor">curiosité</span>, ainsi que ma <span class="mainColor">ténacité</span> à vouloir résoudre un problème, qui m'ont permis de toujours aller plus loin et à souvent transgresser les consignes qui m'avaient été données.
                </p>
                <p>
                    Ma <span class="mainColor">curiosité</span> est une <span class="mainColor">clef</span> qui m'a ouvert beaucoup de portes de <span class="mainColor">compréhension</span>, quant à diverses matières ou concepts de programmation.
                </p>
                <p>
                    Dans le monde du développement, la <span class="mainColor">curiosité</span> n'est-elle donc pas plutôt une <span class="mainColor">qualité</span> ?
                </p>
                </br>
                <p class="center">
                    Je m'appelle <span class="mainColor">Quentin Fayt</span>,
                </p>
                <p class="center">
                    <span class="mainColor">web-développeur curieux</span>.
                </p>
            </div>
        </section>
        <img src="./assets/img/pic.png" class="profilePic" draggable="false" />
        <section class="portGuestbook">
            <div class="portGuestBookContainer">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                ?>
                        <div class="cell">
                            <div>
                                <h3>Message de <?= $message["userGuestB"] ?>:</h3>
                                <p><?= $message["textGuestB"] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="cell">
                        <div>
                            <h3>Message de :</h3>
                            <p>No message yet</p>
                        </div>
                    </div>
                    <div class="cell">
                        <div>
                            <h3>Message de :</h3>
                            <p>No message yet</p>
                        </div>
                    </div>
                    <div class="cell">
                        <div>
                            <h3>Message de :</h3>
                            <p>No message yet</p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <img src="./assets/img/arrowDown.png" class="down" draggable="false" />
    </article>
    <article class="articleGuestBook">
        <p class="formDisplay" onclick="toggleForm()">Vous voulez rajouter un message sur mon portfolio?</p>
        <form class="formGuestBook" method="POST" action="">
            <div>
                <label for="guestBookName">Nom:</label>
                <input id="guestBookName" type="text" maxlength="50" placeholder="Votre Nom (max 50 caractères)" name="userGuestBookName" required></input>
            </div>
            <div>
                <label for="guestBookText">Votre message <span id="length">0/370<span>:</label>
                <textarea id="guestBookText" type="textarea" maxlength="370" name="userGuestBookText" placeholder="Votre message (max 370 caractères)" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="<?= CAPTCHA_USER_HOMEPAGE ?>"></div>
            <div class="buttonGuestBook">
                <input type="submit" value="Envoyer" class="buttonGuestBook"></input>
            </div>
        </form>
    </article>
</main>