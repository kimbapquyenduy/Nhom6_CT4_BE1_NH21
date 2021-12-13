<?php
require "../config.php";
require "../models/db.php";
require "../models/account.php";


$account = new Account;
if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    if($account->checkUserName($username)){
    if ($_POST['password'] == $_POST['re_password']) {
        $password = $_POST['password'];
        $account->addAC($username, $password);
        echo "<script>alert('Đăng kí thành công !')</script>";
        echo "<script>window.location='../login-form/login.php'</script>";
    } else {
        echo "<script>alert('Đăng Mật khẩu không giống đăng kí thất bại !')</script>";
        echo "<script>window.location='Register.php'</script>";
        }
    }
    else {
        echo "<script>alert('Tên Đăng Nhập Đã Tồn Tại !')</script>";
        echo "<script>window.location='Register.php'</script>";
    }


}
