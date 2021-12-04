<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";
$protypes = new Protypes;


if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['type_name'];
    $protypes->editprotypes($name, $_GET['id']);
}



header('location:Products.php');
