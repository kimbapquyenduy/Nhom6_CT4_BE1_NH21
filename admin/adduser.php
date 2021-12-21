<?php
require "config.php";
require "models/db.php";
require "models/Account.php";
$user = new Account;
if (isset($_POST['submit'])) {
    if (!isset($_POST['username']) || trim($_POST['username'] == '' || !isset($_POST['password']) || trim($_POST['password']) == '')) {
        echo "<script>alert('You need to fill all information to add  !')</script>";
        echo "<script>window.location='project-adduser.php'</script>";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user->addAccount($username, $password);
        header('location:User.php');
    }
}
