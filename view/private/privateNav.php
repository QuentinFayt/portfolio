<?php
?>
<nav class="menu">
    <div class="admin" onclick="toggle()">
        <p>Welcome : <?= $_SESSION["username"] ?>!</p>
    </div>

    </div>
    <ul class="first_links">
        <li><a href="./">Accueil</a></li>
        <li><a href="?p=CV">CV</a></li>
        <li><a href="?p=Galerie">Galerie</a></li>
        <li><a href="?p=Tutoriels">Tutoriels</a></li>
        <li><a href="?p=Liens">Liens</a></li>
    </ul>
    <ul class="second_links">
        <li><a href="?p=Edit&private=true">Edit</a></li>
        <li><a id="login" href="?p=Logout&private=true">Log out</a></li>
    </ul>
</nav>