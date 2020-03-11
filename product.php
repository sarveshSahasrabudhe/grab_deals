
<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">

<?php include "includes/navbar.php";$random = $_SESSION['random'];?>



	<!-- Header -->


	
	<!-- Home -->
<!-- 
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Smart Phones<span>.</span></div>
								<div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Product Details -->
		
	<?php 
						if(isset($_GET['info']))
						{

						$info = $_GET['info'];
					//	echo "<script> alert('$info')</script>";
						$query_disp = "SELECT * FROM product where  id = $info";
						$query_disp_result = mysqli_query($connection,$query_disp);
						while ($row = mysqli_fetch_assoc($query_disp_result))
						{
								$p_id = $row['id'];
								   // echo "<script> alert('$p_id')</script>";
								$product_name = $row['product_name'];
								$product_sub_cat = $row['product_sub_cat'];
								$product_image = $row['product_image'];
								$product_price = $row['product_price'];
								$x = $product_price * 1.25;
								?>
				
						

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">

			
						
						
						<div class="details_image_large"><img src="images/<?php echo $product_image?>" alt=""><div class="product_extra product_new"><a href="categories.php">New</a></div></div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img src="images/details_1.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_2.jpg"><img src="images/details_2.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_3.jpg"><img src="images/details_3.jpg" alt=""></div>
							<div class="details_image_thumbnail" data-image="images/details_4.jpg"><img src="images/details_4.jpg" alt=""></div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo $product_name?></div>
						<div class="details_discount">$<?php echo $x ?></div>
						<div class="details_price">$<?php echo $product_price?></div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<form method="POST" ">
								<input id="quantity_input" type="text" name="quantity" pattern="[0-9]*" value="1">
								
							
								
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<input type="submit" name="addToCart" class="button cart_button"  value="Add to cart">

							</form>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
						<div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
					</div>
					<div class="description_text">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php 		}
					}?>

<?php

		if(isset($_POST['addToCart']))
				{
					$quantity = $_POST['quantity'];
				
					if(isset($_GET['info']))
						{

						$id = $_GET['info'];
					//	echo "<script> alert('$quantity')</script>";
						$query_disp = "SELECT * FROM product where  id = $id";
						$query_disp_result = mysqli_query($connection,$query_disp);
						while ($row = mysqli_fetch_assoc($query_disp_result))
						{
								$p_id = $row['id'];
								   // echo "<script> alert('$random')</script>";
								$product_name = $row['product_name'];
								$product_sub_cat = $row['product_sub_cat'];
								$product_image = $row['product_image'];
								$product_price = $row['product_price'];
								//$x = $product_price * 1.25;
								$total = $quantity * $product_price;

						}
					}
			$query_insert = "INSERT INTO cart(`product_id`, `product_name`, `product_sub_cat`, `product_image`, `product_price`, `quantity`,`total_bill`,`temp_id`)
					values ('$p_id','$product_name','$product_sub_cat','$product_image ','$product_price','$quantity','$total','$random')";
						$query_insert_insert = mysqli_query($connection,$query_insert);		


					//	echo "<script>window.open('cart.php','_self')</script>";
					 header("Location:cart.php");
							
				}


				
								?>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Related Products</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<?php 
						$query_related = "SELECT * FROM product where (product_sub_cat like '$product_sub_cat') AND (id != '$p_id') LIMIT 5 ";
						$query_related_result = mysqli_query($connection,$query_related);
						if ($query_related_result)
						{
							  //   echo "<script> alert(' connection')</script>";
						}
						while ($row = mysqli_fetch_assoc($query_related_result))
						{
								$p_id = $row['id'];
								   // echo "<script> alert('$p_id')</script>";
								$product_name = $row['product_name'];
								$product_sub_cat = $row['product_sub_cat'];
								$product_image = $row['product_image'];
								$product_price = $row['product_price'];
								//$x = $product_price * 1.25;
							//	$total = $quantity * $product_price;

						
						?>
						<div class="product">
							<div class="product_image"><img src="images/<?php echo $product_image  ?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href=product.php?info=<?php echo $p_id;?>><?php echo $product_sub_cat ?></a></div>
								<div class="product_price">$<?php echo $product_price ?></div>
							</div>
						</div>
						<?php }?>
						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$520</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$710</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$330</div>
							</div>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
<?php include "includes/footer.php";?>



