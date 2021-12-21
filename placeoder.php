<?php
session_start();
foreach ($_SESSION['cart'] as $key => $value) {


    unset($_SESSION['cart'][$key]);
}
echo "<script>alert('Order Success !')</script>";
echo "<script>window.location='index.php'</script>";
