<?php
?>
<main>
    <h1 class="loginT">Log in</h1>
    <article>
        <form method="POST" action="" class="login">
            <?php
            if (isset($wrongLog) && $wrongLog) {
            ?>
                <div class="wrong" id="wrong">
                    <div onclick="document.getElementById('wrong').style.display='none';" id="cross"></div>
                    <p>Authentification failed : </br>Wrong username or password!</p>
                </div>
            <?php
                $wrongLog = false;
            }
            ?>
            <div>
                <input id="pseudo" type="text" name="username" placeholder="Username" required />
            </div>
            <div>
                <input id="password" type="password" name="password" placeholder="Password" required />
            </div>
            <div class="buttonLogin">
                <input type="submit" value="Log in" />
            </div>
        </form>
    </article>
</main>