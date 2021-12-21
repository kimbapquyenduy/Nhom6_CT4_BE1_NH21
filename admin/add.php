<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";

$manu = new Manufacture;
$product = new Product;
if (isset($_POST['submit'])) {
    # code...



    if (isset($_POST['name'], $_POST['manu'], $_POST['pro'], $_POST['price'], $_POST['desc'])) {
        $name = $_POST['name'];
        $manu_id = $_POST['manu'];
        $type_id = $_POST['pro'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        $feature = (isset($_POST['feature'])) ? 1 : 0;
        $image = $_FILES['image']['name'];
        $product->addProduct($name, $manu_id, $type_id, $price, $feature, $image, $desc);

        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        header('location:Products.php');
    } else {

        echo "<script>alert('You need to fill all product information add failed !')</script>";
        echo "<script>window.location='project-add.php'</script>";
    }
}
