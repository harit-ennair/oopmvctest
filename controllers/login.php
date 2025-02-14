<?php
require_once "../database.php";
require_once "../models/user.php";


if (isset($_POST["submit"])) {

    $login = new User($_POST['email'], $_POST['password']);
    $login->login();
}


require_once "../views/login-view.php";