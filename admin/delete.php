<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";

$manu = new Manufacture;
$product = new Product;
if (isset($_GET['id'])) {
    $product->delProduct($_GET['id']);
    echo "<script>alert(' Xóa thành Công !!!')</script>";
    echo "<script>window.location.href='Products.php'</script>";
}
