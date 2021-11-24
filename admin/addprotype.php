<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/Protypes.php";


$protype = new Protypes;
if (isset($_POST['submit'])) {
    # code...

    $type_id = $_POST['type_id'];
    $type_name = $_POST['type_name'];

    $protype->addprotype($type_id, $type_name);
}
header('location:index.php');
