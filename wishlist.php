<?php include "includes/header.php"?>

<?php 
//$cnt=false;

if($_SESSION['random'] == "")
{
	$random = mt_rand(200,100000000);

	 $_SESSION['random'] = $random;
	//  $test = $_SESSION['random'] ;
	//  echo "<script>console.log($test)</script>";

}
else
{
	
}

?>
<?php include "includes/navbar.php"?>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			
			<div class="owl-carousel owl-theme home_slider">
				
				
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="view.php">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="view.php">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="view.php">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Smart Phones</div>
						<div class="avds_link"><a href="categories.php?info=Mobile">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Professional Cameras</div>
						<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
						<div class="avds_link avds_link_large"><a href="categories.php?info=Camera">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<?php 
						$id_us = $_SESSION['user_id'] ;
						global $p_id;
						$query_disp = "SELECT * FROM product";
						$query_disp_result = mysqli_query($connection,$query_disp);
						while ($row = mysqli_fetch_assoc($query_disp_result))
						{
								$p_id = $row['id'];
								//     echo "<script> alert('$p_id')</script>";
								$product_name = $row['product_name'];
								$product_cat = $row['product_cat'];
								$product_sub_cat = $row['product_sub_cat'];
								$product_image = $row['product_image'];
								$product_price = $row['product_price'];


						$wis_disp = "SELECT * FROM wishlist where user_id = '$id_us' AND product_id = '$p_id'";
						$wis_disp_result = mysqli_query($connection,$wis_disp);
						$num_wish = mysqli_num_rows($wis_disp_result);
						
						if($num_wish > 0)
						{
                            $add = "icon-heart-02.png";
                            
                    //         echo "<script>
					// 	document.getElementByID('wishlist').addEventListener('mouseover',function cng()
					// 	{
					// 		document.getElementById('wishlist').src = 'icon-heart-01.png';
					// 	});

					// 	document.getElementByID('wishlist').addEventListener('mouseleave',function cng()
					// 	{
					// 		document.getElementById('wishlist').src = '$add';
					// 	});
					// </script>";
						}
						else

						{
                        //     $add = "icon-heart-01.png";
                        //     echo "<script>
                        //     document.getElementByID('wishlist').addEventListener('mouseover',function cng()
                        //     {
                        //         document.getElementById('wishlist').src = '$add';
                        //     });
    
                        //     document.getElementByID('wishlist').addEventListener('mouseleave',function cng()
                        //     {
                        //         document.getElementById('wishlist').src = 'icon-heart-02.png';
                        //     });
                        // </script>";
						}
						

								
						?>
							<div class="product">
							<div class="product_image"><img src="images/<?php echo $product_image;?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php">New</a></div>
							<div class="product_content">
								<div><a href="product.php?info=<?php echo $p_id;?>"><?php echo $product_name;?></a></div>
								<div><a href="product.php?info=<?php echo $p_id;?>"><?php echo $product_cat;?></a></div>
								<div class="product_title"><a href="categories.php?info=<?php echo $product_sub_cat;?>"><?php echo $product_sub_cat;?></a>
								<form method="POST">
								<a name="wishlist" href = "wishlist.php?idd=<?php echo $p_id ?>" ><img id="wishlist"  src="images/<?php echo $add; ?>" alt="ICON"></a>
								</form>
								
									<!-- <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png" alt="ICON"> -->
							</div>
							
								<div class="product_price">$<?php echo $product_price;?></div>
							</div>
						</div>
					
						<?php 
						}
					?>

					<?php 
						$id = $_SESSION['user_id'] ;
						if(isset($_GET['idd']))
						{
                            $p_id = $_GET['idd'];

                            $wis_disp = "SELECT * FROM wishlist where user_id = '$id' AND product_id = '$p_id'";
                            $wis_disp_result = mysqli_query($connection,$wis_disp);
                            $num_wish = mysqli_num_rows($wis_disp_result);

                            if($num_wish > 0)
                            {
                                $query_del = "DELETE FROM wishlist where  user_id = '$id' AND product_id = '$p_id'";
                                $query_del_result = mysqli_query($connection,$query_del);
                            }
                            else
                            {                            
								$wish = "INSERT INTO wishlist(product_id,user_id) VALUES ('$p_id','$id' )";
								$wish_result = mysqli_query($connection,$wish);

                            }
						}

						// document.getElementById("goa").addEventListener("mouseover",h1clicked);
						// function h1clicked()
						// {
						// document.getElementById("goa").style.height = "200px";
						// document.getElementById("goa").style.width = "200px";
						// }
						// document.getElementById("goa").addEventListener("mouseleave",h1clickedd)
						// function h1clickedd()
						// {
						// document.getElementById("goa").style.height = "100px";
						// document.getElementById("goa").style.width = "100px";
						// }

						
					?>
                    
						
					

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_5.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_6.jpg" alt=""></div>
							<div class="product_extra product_hot"><a href="categories.php">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_7.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

						<!-- Product -->
						<!-- <div class="product">
							<div class="product_image"><img src="images/product_8.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">Smart Phone</a></div>
								<div class="product_price">$670</div>
							</div>
						</div> -->

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Devices</div>
							<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
							<div class="avds_link avds_xl_link"><a href="categories.php">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
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
    <script>
    // document.getElementById("goa").addEventListener("mouseover",h1clicked);
						// function h1clicked()
						// {
						// document.getElementById("goa").style.height = "200px";
						// document.getElementById("goa").style.width = "200px";
						// }
					var sou = document.getElementById("wishlist").src;
					alert(sou);
					if (sou == "http://localhost/sublime/images/icon-heart-02.png")
                          { 
                               document.getElementByID('wishlist').addEventListener('mouseover',function cng()
                            {
                                document.getElementById('wishlist').src = 'http://localhost/sublime/images/icon-heart-01.png';
                            });
    
                            document.getElementByID('wishlist').addEventListener('mouseleave',function cng2()
                            {
                                document.getElementById('wishlist').src = 'http://localhost/sublime/images/icon-heart-02.png';
                            });
                        }
                        else
                        { 
                               document.getElementByID('wishlist').addEventListener('mouseover',function cng()
                            {
                                document.getElementById('wishlist').src = 'http://localhost/sublime/images/icon-heart-02.png';
                            });
    
                            document.getElementByID('wishlist').addEventListener('mouseleave',function cng2()
                            {
                                document.getElementById('wishlist').src = 'http://localhost/sublime/images/icon-heart-01.png';
                            });
                        }
                        </script>

	<!-- Footer -->
	
	<?php include "includes/footer.php"?>