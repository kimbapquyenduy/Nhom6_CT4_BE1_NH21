<?php
require "config.php";
require "models/db.php";
require "models/Account.php";



$user = new Account;
if (isset($_GET['id'])) {


    if ($_GET['id'] == 1) {
        echo "<script>alert('Không thể xóa admin')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {

        $user->delAccount($_GET['id']);
        echo "<script>alert('Xóa thành công!!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
