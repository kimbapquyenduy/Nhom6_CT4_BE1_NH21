<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";

$manu = new Manufacture;
$product = new Product;
var_dump($_GET['id']);

if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['pro'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
    } else {
        $image = "";
    }
    $product->editProduct($name, $manu_id, $type_id, $price, $image, $desc, $_GET['id']);

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
}



header('location:Products.php');
