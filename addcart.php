<?php include "header.php";
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                </div>
                                <div class="col-xs-6">
                                    <a href="/nhom6/index.php">
                                        <button type="button" class="btn btn-primary btn-sm btn-block" style="background-color:#D10024 ;color:white;font-weight:900">
                                            Continue shopping
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            if (isset($_SESSION['cart'][$id])) {
                                $_SESSION['cart'][$id]++;
                            } else {
                                $_SESSION['cart'][$id] = 1;
                            }
                        }

                        $total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {

                            foreach ($getAllProducts as  $value2) {

                                if ($key == $value2['id']) {

                        ?>
                                    <div class="row">
                                        <div class="col-xs-2"><img class="img-responsive" src="./img/<?php echo $value2['image'] ?>">
                                        </div>
                                        <div class="col-xs-4">
                                            <h4 class="product-name"><strong><?php echo $value2['name'];  ?></strong></h4>
                                            <h4><small><?php echo substr($value2['descripsion'], 0, 80); ?></small></h4>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="col-xs-6 text-right">
                                                <h6 style="padding-top: 20px;font-size:15px"><strong><?php echo number_format($value2['price']) . " VND"; ?> <span class="text-muted">x</span></strong></h6>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5 style="padding-top: 20px;font-size:15px"> <?php echo " " . $value; ?></h5>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-link btn-xs">
                                                    <i class="fa fa-trash" aria-hidden="true" style="font-size: 20px;color:#D10024;padding-top: 20px"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                        <?php

                                    if (isset($_POST['cash'])) {
                                        $value = $_POST['cash'];
                                    }
                                    $total = $total + $value2['price'] * $value;
                                }
                            }
                        }

                        ?>
                        <!-- <hr>
                        <div class="row">
                            <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                            </div>
                            <div class="col-xs-4">
                                <h4 class="product-name"><strong>Product name</strong></h4>
                                <h4><small>Product description</small></h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control input-sm" value="1">
                                </div>
                                <div class="col-xs-2">
                                    <button type="button" class="btn btn-link btn-xs">
                                        <span class="glyphicon glyphicon-trash"> </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr> -->
                        <div class="row">
                            <div class="text-center">
                                <div class="col-xs-9">
                                    <!-- <h6 class="text-right">Added items?</h6> -->
                                </div>
                                <div class="col-xs-3">
                                    <!-- <a href="addcart.php">
                                        <button type="button" class="btn btn-default btn-sm btn-block">
                                            Update cart
                                        </button></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9">
                                <h4 class="text-right" style="padding-top: 10px;">Total <strong><?php echo number_format($total) . " VND"  ?></strong></h4>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="btn btn-success btn-block" style="background-color:#D10024 ;color:white;font-weight:900">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.html"; ?>

    </html>