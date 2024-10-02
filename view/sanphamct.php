<!-- Menu ******************************* -->
<div class="theme_menu color1_bg">
	<div class="container">
		<nav class="menuzord pull-left" id="main_menu">
			<ul class="menuzord-menu">
				<li><a href="index.php">Trang chủ1</a></li>
				<li><a href="shop.html">Giới thiệu1</a></li>
				<li><a href="gallery-grid.html">Phòng trưng bày</a></li>
				<li><a href="contact.html">Liên hệ</a></li>
			</ul> <!-- End of .menuzord-menu -->
		</nav> <!-- End of #main_menu -->


		<!-- ******* Cart And Search Option ******** -->
		<div class="nav_side_content pull-right">
			<ul class="icon_header">
				<li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div> <!-- End of .nav_side_content -->

	</div> <!-- End of .conatiner -->
</div> <!-- End of .theme_menu -->

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs text-center">
					<h1>sản phẩm duy nhất</h1>
					<h4>Chào mừng bạn đến với nhà cung cấp sản phẩm trực tuyến được chứng nhận</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-5 col-sm-5">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						<li>SẢN PHẨM DUY NHẤT</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-7 col-sm-7">
					<p>We provide <span>100% organic</span> products</p>
				</div>
			</div>
		</div>
	</div>

</section>
<div class="shop_single_page">
	<div class="container">
		<div class="row">


			<!-- _______________________ SIDEBAR ____________________ -->
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
				<div class="wrapper">


					<div class="sidebar_categories">
						<div class="theme_inner_title">
							<h4>Danh mục sản phẩm</h4>
						</div>
						<ul>
							<?php
							foreach ($dsdm as $dm) {
								extract($dm);
								$linkdm = "index.php?act=sanpham&iddm=" . $id;
								echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
							}
							?>
							<!-- <li><a href="#" class="tran3s">Vegetables   (15)</a></li>
										<li><a href="#" class="tran3s">Fruits & Drinks   (06)</a></li>
										<li><a href="#" class="tran3s">Fresh Meat   (12)</a></li>
										<li><a href="#" class="tran3s">Beauty Care   (14)</a></li> -->
						</ul>
					</div> <!-- End of .sidebar_categories -->



					<div class="best_sellers clear_fix wow fadeInUp">
						<div class="theme_inner_title">
							<h4>Sản phẩm phổ biến</h4>
						</div>



						<?php
						foreach ($dstop10 as $sp) {
							extract($sp);
							$linksp = "index.php?act=sanphamct&idsp=" . $id;
							$img = $img_path . $img;
							echo '
													<div class=" clear_fix border">
													<div class="float_left top10 mb10">
														<img src="' . $img . '" alt="">
														<a href="' . $linksp . '" class="text float_left">' . $name . '</a>
													</div>
													
													
													
													</div>';
						}
						?>
						<!-- End of .img_holder -->


					</div>
				</div>
				<div class="sidebar_tags wow fadeInUp">
					<div class="theme_inner_title">
						<h4>product Tags</h4>
					</div>

					<ul>
						<li><a href="#" class="tran3s">fruits</a></li>
						<li><a href="#" class="tran3s">Cosmetics</a></li>
						<li><a href="#" class="tran3s">Farmers</a></li>
						<li><a href="#" class="tran3s">Healthy</a></li>
						<li><a href="#" class="tran3s">Catering</a> </li>
						<li><a href="#" class="tran3s">Chemical</a></li>
						<li><a href="#" class="tran3s">Post Format</a> </li>
						<li><a href="#" class="tran3s">Industry</a></li>
						<li><a href="#" class="tran3s">Research</a></li>
					</ul>
				</div> <!-- End of .sidebar_tags -->

			</div> <!-- End of .wrapper -->




			<!--SẢN PHẨM -->
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 product_details">
				<div class="wrapper">
					<div class="product_top_section clear_fix">
						<?php
						extract($onesp);
						?>
						<div class="img_holder float_left">
							<?php
							$img = $img_path . $img;
							echo '<img src="' . $img . '" alt="img" class="img-responsive">';

							?>
						</div> <!-- End of .img_holder -->
						<div class="item_description float_left">
							<div class="product_name">
								<h1><?= $name ?></h1>
							</div>
							<span class="item_price"><?= $price ?> VNĐ</span>
							<p><?= $mota ?></p>

							<!-- <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)" > -->
							<!-- <a href="#" class="tran3s color1_bg">Thêm vào giỏ hàng</a> -->
							<button data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)" class="btn btn-danger" style="padding: 10px; margin-left: 20px;">Thêm vào giỏ hàng</button>
						</div> <!-- End of .item_description -->
					</div> <!-- End of .product_top_section -->





					<!-- Bình Luận-->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
					<script>
						$(document).ready(function() {

							$("#binhluan").load("view/binhluan/binhluanform.php", {
								idpro: <?= $id ?>
							});

						});
					</script>
					<div class="mb mb" id="binhluan">

					</div>



					<div class="related_product">
						<div class="theme_title">
							<h3>SẢN PHẨM CÙNG LOẠI</h3>
						</div>


						<!-- Shop Page Content************************ -->
						<div class="shop_page featured-product">

							<div class="row">

								<?php
								$i = 0;
								foreach ($spcungloai as $spcungloai) :
									extract($spcungloai);
									$linksp = "index.php?act=sanphamct&idsp=" . $id;
									$hinh = $img_path . $img;
								?>
									<div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
										<div class="inner-box">
											<div class="single-item center">

												<figure class="image-box"><img src="<?php echo $hinh ?>" alt="">
													<div class="product-model new">New</div>
												</figure>
												<div class="content">
													<h3><a href="#"><?php echo $name ?>'</a></h3>
													<div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
													<div class="price"><?php echo number_format($price) ?><u>đ</u><span class="prev-rate">13.000 <u>đ</u></span></div>
												</div>

												<div class="overlay-box">
													<div class="inner">

														<div class="top-content">
															<!-- <form action="index.php?act=addtocart" method="post" class="fa"> -->
															<ul>
																<li><a href="<?php echo $linksp ?>"><span class="fa fa-eye"></span></a></li>

																<li class="tultip-op">
																	<!-- <span class="tultip"> -->

																	<!-- <i class="fa fa-sort-desc"></i><button type="submit" name="addtocart" value="Add to cart" style="width: 110px; color: green;" > -->
																	<button data-id="<?= $id ?>" style="width: 42px;" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)"><span class="icon-icon-32846"></span></button>


																</li>
																<li><a href=""><span class="fa fa-heart-o"></span></a></li>
															</ul>
															<!-- </form> -->
														</div>
														<div class="bottom-content">
															<h4><a href="#">It Contains:</a></h4>
															<p>35% of organic raisins 55% of oats and 10% of butter. </p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								<?php
									$i += 1;
								endforeach;
								?>
							</div> <!-- End of .row -->

						</div> <!-- End of .shop_page -->
					</div> <!-- End of .related_product -->



				</div> <!-- End of .wrapper -->
			</div> <!-- End of .col -->


		</div> <!-- End of .row -->
	</div> <!-- End of .container -->
</div> <!-- End of .shop_single_page -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
	let totalProduct = document.getElementById('totalProduct');

	function addToCart(productId, productName, productPrice) {
		// console.log(productId, productName, productPrice);
		// Sử dụng jQuery
		$.ajax({
			type: 'POST',
			// Đường dẫ tới tệp PHP xử lý dữ liệu
			url: './view/addToCart.php',
			data: {
				id: productId,
				name: productName,
				price: productPrice
			},
			success: function(response) {
				totalProduct.innerText = response;
				alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
			},
			error: function(error) {
				console.log(error);
			}
		});
	}
</script>