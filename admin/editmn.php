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
    $name = $_POST['manu_name'];
    $manu->editmanu($name, $_GET['id']);
}



header('location:Manufactures.php');
