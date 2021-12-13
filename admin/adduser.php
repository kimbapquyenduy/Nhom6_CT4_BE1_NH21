<?php
require "config.php";
require "models/db.php";
require "models/Account.php";
$user = new Account;
if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user->addAccount($username, $password, 2);
}
header('location:User.php');
