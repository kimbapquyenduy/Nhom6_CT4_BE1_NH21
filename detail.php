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

				<div class="product">

					<div style="text-align: center;"><img src="./img/<?php echo $value['image'] ?> " alt="" style="border-radius: 20px; width: 500px;"></div>
					<div class="product-body">

						<h3 style="font-size: 40px;"><?php echo $value['name']; ?></h3>
						<h4 class="product-price" style="font-size: 30px;"> Price : <?php echo number_format($value['price']) ?> VND</h4>
						<h3 style="font-size: 18px;"><?php echo $value['descripsion']; ?></h3>

					</div>
					<div class="add-to-cart">
						<form action="" method="post">
							<button class="add-to-cart-btn" type="submit" name="add"><i class="fa fa-shopping-cart"></i> add to cart</button>
							<input type="hidden" name="productid" value=<?php echo $value['id'] ?>>
						</form>
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