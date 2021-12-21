<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";


$protype = new Protypes;
if (isset($_POST['submit'])) {
    # code...

    if (!isset($_POST['type_name']) || trim($_POST['type_name']) == '') {
        echo "<script>alert('You need to fill all information to add  !')</script>";
        echo "<script>window.location='project-addprotype.php'</script>";
    } else {
        $type_name = $_POST['type_name'];
        $protype->addprotype($type_name);
        header('location:Protypes.php');
    }
}
