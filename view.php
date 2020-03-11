<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">

<?php include "includes/navbar.php";$random = $_SESSION['random'];?>
	
	<!-- Home -->

	<!-- <div class="home">
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
                    <?php 
						

						
					//	echo "<script> alert('$info')</script>";
						$query_disp = "SELECT * FROM product limit 20";
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
                                
                        
						<!-- Product -->
                        <div class="product">
							<div class="product_image"><img src="images/<?php echo $product_image  ?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href=product.php?info=<?php echo $p_id;?>><?php echo $product_sub_cat ?></a></div>
								<div class="product_price">$<?php echo $product_price ?></div>
							</div>
                        </div>
                        <?php } ?>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$520</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$710</div>
							</div>
						</div>
									
						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$330</div>
							</div>
						</div>

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