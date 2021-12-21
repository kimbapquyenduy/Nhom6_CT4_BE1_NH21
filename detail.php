<?php
include "header.php";
?>

<body>



	<?php
	if (isset($_GET['id'])) {
		# code...

		foreach ($getAllProducts as $value) {

			if ($value['id'] == $_GET['id']) {



	?>

				<div class="col-md-6 col-xs-4" style=" padding-top: 17px;float: left;width:400px;">
					<div class="section-title">
						<h4 class="title" style="padding-top: 20px; color:#D10024;font-weight: bold;">Related Product !!! </i></h4>
						<div class="section-nav">
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-4">
						<?php
						$slide = count($product->getProductByManu($value['manu_id'])) / 5;
						$perslide = 4;
						$curslide = 1;

						for ($i = 0; $i < $slide; $i++) {
							# code...
							$get3Hotproducts = $product->get3ProductsByManu($value['manu_id'], $curslide, $perslide);
						?>

							<div>
								<?php foreach ($get3Hotproducts as $value2) {
									if ($value2['id'] == $value['id']) {
									} else {
										# code...

								?>
										<!-- product widget -->

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/<?php echo $value2['image'] ?> " alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name'] ?></p>
												<h3 class="product-name"><a href="detail.php?id=<?php echo $value2['id']; ?>"><?php echo $value2['name'] ?></a></h3>
												<h4 class="product-price"><?php echo number_format($value2['price']); ?></h4>
											</div>
										</div>

										<!-- /product widget -->
								<?php }
								} ?>
							</div>
						<?php
							$curslide++;
						} ?>
					</div>
				</div>

				<div class="col-md-6 col-xs-4" style=" padding-top: 17px;">
					<div class=" product" style="width: 1100px;">

						<div style=" text-align: center; padding-top:20px;"><img src="./img/<?php echo $value['image'] ?> " alt="" style=" width: 500px;"></div>
						<div class="product-body">

							<h3 style="font-size: 30px;"><?php echo $value['name']; ?></h3>

							<h4 class="product-price" style="font-size: 30px;"> Price : <?php echo number_format($value['price']) ?> VND</h4>
							<h3 style="font-size: 17px;"><?php echo $value['descripsion']; ?></h3>

						</div>
						<div class="add-to-cart">
							<form action="" method="post">
								<button class="add-to-cart-btn" type="submit" name="add"><i class="fa fa-shopping-cart"></i> add to cart</button>
								<input type="hidden" name="productid" value=<?php echo $value['id'] ?>>
								<input type="hidden" name="num" value=1>
							</form>
						</div>
					</div>

				</div>




	<?php
			};
		};
	};
	?>
	<?php
	?>
	<?php include "footer.html" ?>