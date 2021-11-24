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

    $manu_id = $_POST['manu_id'];
    $manu_name = $_POST['manu_name'];

    $manu->addManu($manu_id, $manu_name);
}
header('location:index.php');
