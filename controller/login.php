<?php




if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (
        mysqli_fetch_row(mysqli_query($DB, "SELECT `username` FROM `portfolio_admin` WHERE `username` = '$username'"))[0] &&
        password_verify($password, mysqli_fetch_row(mysqli_query($DB, "SELECT `password` FROM `portfolio_admin` WHERE `username` = '$username'"))[0])
    ) {

        $_SESSION["idSession"] = session_id();
        $_SESSION["username"] = $username;
        header("Location: ./");
    } else {
        $wrongLog = true;
    }
}
