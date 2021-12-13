<?php
require "config.php";
require "models/db.php";

require "models/Account.php";
$user = new Account;


if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user->editAccount($username, $password, $_GET['id']);
}



header('location:User.php');
