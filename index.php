<?php
include "header.php";
?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>

				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php foreach ($getNewProducts as $value) {
									# code...
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['image'] ?> " alt="">
											<div class="product-label">
												<!-- <span class="sale">-30%</span> -->
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"> <?php echo number_format($value['price']) ?> VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<!-- <div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div> -->
										</div>
										<div class="add-to-cart">
											<form action="" method="post">
												<button class="add-to-cart-btn" type="submit" name="add"><i class="fa fa-shopping-cart"></i> add to cart</button>
												<input type="hidden" name="productid" value=<?php echo $value['id'] ?>>
												<input type="hidden" name="num" value="1">
											</form>
										</div>
									</div>
								<?php

								}

								?>
								<!-- /product -->


							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php if (isset($_GET['type_id'])) { ?>
								<?php $curlocation = $_SERVER['PHP_SELF'] . "?type_id=" . $_GET['type_id'];
								foreach ($getallprotypes as $value) :
								?>

									<li class="<?php echo ($curlocation == "/nhom6/index.php?type_id=" . $value['type_id'] ? "active" : "") ?>"><a href="index.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>


								<?php endforeach; ?>


								<?php     } else {
								foreach ($getallprotypes as $value) : ?>

									<li class="<?php echo  $value['type_id'] == 1 ? "active" : "" ?>"><a href="index.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>

							<?php
								endforeach;
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->

								<?php
								if (!isset($_GET['type_id'])) {
									$_GET['type_id'] = 1;
								}
								$getProductsByProtype = $product->getProductsByProtype($_GET['type_id']);
								foreach ($getProductsByProtype as $value) {



								?>
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['image'] ?>" alt="">
											<div class="product-label">
												<!-- <span class="sale">-30%</span>
													<span class="new">NEW</span> -->
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"> <?php echo number_format($value['price']) ?> VND</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<form action="" method="post">
												<button class="add-to-cart-btn" type="submit" name="add"><i class="fa fa-shopping-cart"></i> add to cart</button>
												<input type="hidden" name="productid" value=<?php echo $value['id'] ?>>
											</form>
										</div>
									</div>


								<?php }
								?>
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling Apple</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">

					<?php
					$slide = count($product->getAppleProduct()) / 3;

					$perslide = 3;
					$curslide = 1;

					for ($i = 0; $i < $slide; $i++) {
						# code...
						$get3Hotproducts = $product->get3AppleProduct($curslide, $perslide);
					?>

						<div>
							<?php foreach ($get3Hotproducts as $value) { ?>
								<!-- product widget -->

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['type_name'] ?></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) . " VND"; ?></h4>
									</div>
								</div>

								<!-- /product widget -->
							<?php } ?>
						</div>
					<?php
						$curslide++;
					} ?>





				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Hot Product</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<?php
					$slide = count($product->getHotProduct()) / 3;

					$perslide = 3;
					$curslide = 1;

					for ($i = 0; $i < $slide; $i++) {
						# code...
						$get3Hotproducts = $product->get3HotProduct($curslide, $perslide);
					?>

						<div>
							<?php foreach ($get3Hotproducts as $value) { ?>
								<!-- product widget -->

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['type_name'] ?></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) . " VND"; ?></h4>
									</div>
								</div>

								<!-- /product widget -->
							<?php } ?>
						</div>
					<?php
						$curslide++;
					} ?>

				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling Xiaomi</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">

					<?php
					$slide = count($product->getXiaomiProduct()) / 3;

					$perslide = 3;
					$curslide = 1;

					for ($i = 0; $i < $slide; $i++) {
						# code...
						$get3Hotproducts = $product->get3XiaomiProduct($curslide, $perslide);
					?>

						<div>
							<?php foreach ($get3Hotproducts as $value) { ?>
								<!-- product widget -->

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?> " alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['type_name'] ?></p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) . " VND"; ?></h4>
									</div>
								</div>

								<!-- /product widget -->
							<?php } ?>
						</div>
					<?php
						$curslide++;
					} ?>


				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<?php include "footer.html" ?>