<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";

$manu = new Manufacture;
$product = new Product;

$getAllManu = $manu->getAllManu();
$getAllProducts = $product->getAllProducts();
$getNewProducts = $product->getNewProducts();


if (isset($_POST['add'])) {

    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "productid");

        if (in_array($_POST['productid'], $item_array_id)) {
            echo "<script>alert('sản phẩm đã có trong giỏ hàng')</script>";
            echo "<script>window.location='index.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $itemarray = array('productid' => $_POST['productid']);
            $_SESSION['cart'][$count] = $itemarray;
        }
    } else {
        $itemarray = array('productid' => $_POST['productid']);
        $_SESSION['cart'][0] = $itemarray;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="/nhom6/index.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form method="get" action="result.php">
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Category 01</option>
                                    <option value="1">Category 02</option>
                                </select>
                                <input class="input" placeholder="Search here" name="keyword">
                                <button type="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <!-- <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div> -->
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty"><?php if (isset($_SESSION['cart'])) {
                                                            $count = count($_SESSION['cart']);
                                                            echo $count;
                                                        } else {

                                                            echo "0";
                                                        } ?></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <?php $total = 0;
                                        if (isset($_SESSION['cart'])) {
                                            # code...

                                            $productid = array_column($_SESSION['cart'], 'productid');
                                            $total = 0;

                                            foreach ($getAllProducts as $value) {
                                                foreach ($productid as $id) {
                                                    if ($value['id'] == $id) {


                                        ?>
                                                        <div class="product-widget">

                                                            <div class="product-img">
                                                                <img src="./img/<?php echo $value['image']; ?>" alt="">
                                                            </div>
                                                            <div class="product-body">
                                                                <h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"> <?php echo $value['name']; ?> </a></h3>
                                                                <h4 class="product-price"><?php echo number_format($value['price']); ?><span class="qty"></span></h4>
                                                            </div>
                                                            <!-- <button class="delete"><i class="fa fa-close"></i></button> -->
                                                        </div>
                                        <?php $total = $total + $value['price'];
                                                    };
                                                };
                                            };
                                        }; ?>
                                    </div>

                                    <div class="cart-summary">
                                        <small><?php if (isset($_SESSION['cart'])) {
                                                    $count = count($_SESSION['cart']);
                                                    echo $count;
                                                } else {
                                                    echo "0";
                                                } ?></small>
                                        <h5>SUBTOTAL: <?php echo " " . number_format($total); ?></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="addtocart.php">View Cart</a>
                                        <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">

                    <?php if (isset($_GET['manu_id'])) { ?>
                        <li><a class="text-warning" href="index.php">Home</a></li>
                        <?php
                        $curlocation = $_SERVER['PHP_SELF'] . "?manu_id=" . $_GET['manu_id'];

                        foreach ($getAllManu as $value) {


                        ?>
                            <li class="<?php echo ($curlocation == "/nhom6/products.php?manu_id=" . $value['manu_id'] ? "active" : "") ?> "><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
                                    <?php echo $value['manu_name'] ?></a></li>
                        <?php


                        }
                    } else {
                        ?>
                        <li class="active"><a class="text-warning" href="index.php">Home</a></li>
                        <?php
                        foreach ($getAllManu as $value) :
                        ?>
                            <li><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
                                    <?php echo $value['manu_name'] ?></a></li>



                        <?php endforeach; ?>


                    <?php     }


                    ?>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->