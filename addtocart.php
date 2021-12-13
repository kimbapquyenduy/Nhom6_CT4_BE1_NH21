<?php include "header.php";
?>
<?php if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {

            if ($value["productid"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been remove !')</script>";
                echo "<script>window.location='addtocart.php'</script>";
            }
        }
    }
}



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
                                    <a href="/nhom6/index.php" style="text-decoration: none;">
                                        <button type="button" class="btn btn-primary btn-sm btn-block" style="background-color:#D10024 ;color:white;font-weight:900">
                                            Continue shopping
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php
                        $total = 0;


                        if (isset($_SESSION['cart'])) {
                            # code...

                            $productid = array_column($_SESSION['cart'], 'productid');
                            $productnum = array_column($_SESSION['cart'],  'num');


                            foreach ($getAllProducts as $value) {
                                foreach ($_SESSION['cart'] as $value2) {
                                    if ($value['id'] == $value2['productid']) {
                                       

                        ?>
                                        <form action="addtocart.php?action=remove&id=<?php echo $value['id'] ?>" method="post">
                                            <div class="row">
                                                <div class="col-xs-2"><img class="img-responsive" src="./img/<?php echo $value['image'] ?>">
                                                </div>
                                                <div class="col-xs-4">
                                                    <h4 class="product-name"><strong><?php echo $value['name'] ?></strong></h4>
                                                    <h4><small><?php echo substr($value['descripsion'], 0, 80); ?></small></h4>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="col-xs-6 text-right">
                                                    <input type="hidden"  class="iprice" value="<?php echo $value['price']?>">
                                                        <h6 style="padding-top: 20px;font-size:15px" ><strong><?php echo number_format($value['price']);  ?> <span class="text-muted">x</span> </strong></h6>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <h5 style="padding-top: 15px;font-size:15px">
                                                            <form action="" method="post">
                                                                <input type="number" class="iquantity" onchange="countTotal()" min="1" max="10" name="quan" value="<?php echo $value2['num'] ?>">
                                                               

                                                            </form>
                                                        </h5>
                                                    </div>

                                                    <div class="col-xs-2">

                                                        <button type="submit" class="btn btn-link btn-xs" name="remove">
                                                            <i class="fa fa-trash" aria-hidden="true" style="font-size: 20px;color:#D10024;padding-top: 20px"></i>
                                                        </button>

                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                       
                                            
                        <?php

                                        
                                    };
                                };
                            };
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
                            
                             <h4 class="text-right " id="gtotal" style="font-weight :bold"><strong>  </strong></h4>
                            </div>
                            <div class="col-xs-3">
                                <a href="checkout.php" style="text-decoration: none;"> <button type="button" class="btn btn-success btn-block" style="background-color:#D10024 ;color:white;font-weight:900">
                                        Checkout
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                                    <script>
                                        var iprice=document.getElementsByClassName('iprice')
                                        var iquantity=document.getElementsByClassName('iquantity');
                                        var gtotal=document.getElementById('gtotal');
                                        var gt =0;

                                        function countTotal(){
                                            gt=0
                                            for ( i=0; i < iprice.length; i++) {
                                               gt=gt+(iprice[i].value)*(iquantity[i].value);
                                               gtotal.innerText="Total : "+Intl.NumberFormat().format(gt) ;
                                                
                                            }
                                        }  
                                        countTotal();
                                         </script>
    <?php include "footer.html"; ?>

    </html>