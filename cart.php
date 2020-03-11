<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
	<!-- Header -->


	<?php include "includes/navbar.php";$random = $_SESSION['random'];?>
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="categories.php">Categories</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$r =$_SESSION['random'];
				//echo "<script> alert('$r')</script>";
			$count = false;
						//$id = $_GET['cart'];
					//	echo "<script> alert('$quantity')</script>";
					if(isset( $_SESSION['user_id']))
					{
						$user_id = $_SESSION['user_id'];
							//echo "<script> alert('$user_id')</script>";
						$update = "UPDATE cart SET user_id = '$user_id' where temp_id = '$random'";
						$update_result = mysqli_query($connection,$update);


						$query_disp_cart = "SELECT * FROM cart where user_id = '$user_id' ";
						$query_disp_cart_result = mysqli_query($connection,$query_disp_cart);
						//header("Location:cart.php");
						$count=true;
					}
					if (!$count)
						{
						$query_disp_cart = "SELECT * FROM cart";
						$query_disp_cart_result = mysqli_query($connection,$query_disp_cart);
						}
						while ($row = mysqli_fetch_assoc($query_disp_cart_result))
						{
								$p_id = $row['id'];
								$product_id = $row['product_id'];
								   // echo "<script> alert('$p_id')</script>";
								$product_name = $row['product_name'];
								$product_sub_cat = $row['product_sub_cat'];
								$product_image = $row['product_image'];
								$product_price = $row['product_price'];
								$user_id = $row['user_id'];
								$temp_id = $row['temp_id'];
								//$x = $product_price * 1.25;
								//$total = $quantity * $product_price;
								$quantity = $row['quantity'];
								$total = $row['total_bill'];
								//header("Location:cart.php");
					
						  // echo "<script> alert('$user_id')</script>";

							
								?>
				

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="images/<?php echo $product_image?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="product.php?info=<?php echo $product_id;?>"><?php echo $product_name?></a></div>
								<div class="cart_item_edit"><a href="#"><?php echo $product_sub_cat?></a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><?php echo $product_price?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Qty</span>
									<input id="quantity_input" type="text" value="<?php echo $quantity?>" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<div class="cart_item_total">$ <?php echo $total ?></div>
					</div>

				</div>
			</div>
			<?php 
	}
	
?>

			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="index.php">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div class="button clear_cart_button"><a href="cart.php?id=<?php 
							$r =$_SESSION['random'];
							if(isset($_SESSION['userName_back']))
							{
							echo
							 $user_id = $_SESSION['user_id'];
							}
							else 
							{
								echo $r;
							}
							
							 ?>">Clear cart</a></div>
							<div class="button update_cart_button"><a href="cart.php">Update cart</a></div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Shipping method</div>
						<div class="section_subtitle">Select the one you want</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Next day delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$4.99</span>
							</label>
							<label class="delivery_option clearfix">Standard delivery
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$1.99</span>
							</label>
							<label class="delivery_option clearfix">Personal pickup
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Free</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Coupon code</div>
						<div class="section_subtitle">Enter your coupon code</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Apply</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="checkout.php">Proceed to checkout</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>


<?php
	// location.reload();
?>
	<!-- Footer -->
	

	<?php include "includes/footer.php"?>

	<?php
	if(isset($_GET['id']))
	{
		$i = $_GET['id'];
		$r =$_SESSION['random'];
		if(isset($_SESSION['userName_back']))
		{
			$query_clear = "DELETE  FROM cart where user_id='$i'";
		}
		else 
		{
			$query_clear = "DELETE  FROM cart where temp_id='$r'";
		}

		   // echo "<script> alert('$i')</script>";
		//$query_clear = "DELETE  FROM cart where user_id='$i'";
		$query_clear_result = mysqli_query($connection,$query_clear);

	//	echo "<script>window.open('cart.php','_self')</script>";
		header("Location:cart.php");
	}	
	?>
	<?php 
	// if(!isset($_SESSION['already_refreshed'])){
 
	// 	//Number of seconds to refresh the page after.
	// 	$refreshAfter = 5;
	 
	// 	//Send a Refresh header.
	// 	header('Refresh: ' . $refreshAfter);
	 
	// 	//Set the session variable so that we don't
	// 	//refresh again.
	// 	$_SESSION['already_refreshed'] = true;
	 
	// }
	// header("Refresh:0");
	// echo "<meta http-equiv='refresh' content = '5'";
	?>

	<!-- <script>window.location.reload()</script> -->
