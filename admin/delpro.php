<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";

$manu = new Manufacture;
$protype = new Protypes;
$product = new Product;
if (isset($_GET['type_id'])) {


    if (count($product->getProductByPro($_GET['type_id'])) == 0) {
        $protype->delProtype($_GET['type_id']);
        echo "<script>alert('Xóa thành công!!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Protypes này vẫn còn sản phẩm xóa thất bại !!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
