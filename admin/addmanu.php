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

    if (!isset($_POST['manu_name']) || trim($_POST['manu_name']) == '') {
        echo "<script>alert('You need to fill all information to add  !')</script>";
        echo "<script>window.location='project-addmanu.php'</script>";
    } else {


        $manu_name = $_POST['manu_name'];
        $manu->addManu($manu_name);
        header('location:Manufactures.php');
    }
}
