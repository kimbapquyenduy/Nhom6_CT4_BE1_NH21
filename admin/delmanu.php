<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";

$manu = new Manufacture;
$product = new Product;
if (isset($_GET['manu_id'])) {


    if (count($product->getProductByManu($_GET['manu_id'])) == 0) {
        $manu->delManu($_GET['manu_id']);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Manufacture này vẫn còn sản phẩm xóa thất bại !!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
