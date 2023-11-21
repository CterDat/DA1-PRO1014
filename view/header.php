<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from st.ourhtmldemo.com/template/organic_store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:31:30 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Organic Store | Responsive HTML5 Template</title>
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">



		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fixing Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
		<![endif]-->
		<style>
			.top10 img{
				width: 50px;
				height: 50px;
				float: left;
				margin-right: 10px;
				border-radius: 5px;
				border: 1px #ccc solid;
			}
			.mb10{
			margin-bottom: 10px;
			}
			
		</style>
	</head>



	<body>
		<div class="main_page">


			<!-- Header *******************************  -->
			<header>
				<div class="top_header">
					<div class="container">
						<div class="pull-left header_left">
							<ul>
		        				<li><a href="#">Liên hệ số điện thoại : <span>+321 453 68 739</span></a></li>
		        				<li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">dct@gmail.com</a></li>
		        			</ul>
						</div>

						<div class="pull-right header_right">
							<div class="state" id="value1">
								<ul>
			        				<li><i class="fa fa-user s_color" aria-hidden="true"></i><a href="#">Tài khoản</a></li>
			        				<li><i class="fa fa-heart s_color" aria-hidden="true"></i><a href="#">Danh sách yêu thích </a></li>
			        				<li><i class="fa fa-truck s_color" aria-hidden="true"></i><a href="#">Danh sách giao hàng</a></li>
			        			</ul>
			        			<div id="polyglotLanguageSwitcher">
									<form action="#">
										<select id="polyglot-language-options">
											<option id="en" value="en" selected>English</option>
											<option id="fr" value="fr">French</option>
											<option id="de" value="de">German</option>
											<option id="it" value="it">Italian</option>
											<option id="es" value="es">Spanish</option>
										</select>
									</form>
								</div>
							</div>

								
						</div>
					</div> <!-- End of .container -->
				</div> <!-- End of .top_header -->

				<div class="bottom_header">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="search-box">
									<form action="#" class="clearfix">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
								<div class="logo-area">
									<a href="index.php" class="pull-left logo"><img src="images/logo/logo.png" alt="LOGO"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-7 col-xs-6 pdt-14">
								<div class="login_option float_left">
							   		<div class="login_form">
							   			<div class="user">
							   				<i class="icon-photo"></i>
							   			</div>
							   			<div class="login-info">
										   <?php
												if (isset($_SESSION['user'])) {
													extract($_SESSION['user']);
											?>
								   					<div class="welcome">Chào mừng!
													   <?=$user?>
													</div>
											
									   		<!-- select menu -->
									            
							                        <div class="g-input f1 mb-30">
													<?php if ($role==1) { ?>
													<a href="admin/index.php" class="text-capitalize selectpicker" data-style="g-select" data-width="100%">Quản trị</a>
													<?php } ?>
														
														<a href="index.php?act=thoat" class="text-capitalize selectpicker" data-style="g-select" data-width="100%">Thoát</a>
							                        </div>
													<?php

												}else{
												?>
													<div class="g-input f1 mb-30">
							                            <a href="view/taikhoan/login.php" class="text-capitalize selectpicker" data-style="g-select" data-width="100%">Đăng nhập</a>
														
							                        </div>
												
												<?php } ?>
								   		</div>
							   		</div> 
									<!-- End of .cart_list -->
							    </div>
							    <div class="cart_option float_left" style="margin: 0px;">
							   		<button class="cart tran3s dropdown-toggle" id="cartDropdown"><i class="fa icon-icon-32846" aria-hidden="true"></i><span class="s_color_bg p_color">2</span></button>
							   		<div class="cart-info">
							   			<div>Giỏ hàng của tôi</div>
								   		<div class="doller">84.00$</div>
							   		</div>
								   		
							   		<div class="cart_list color2_bg" aria-labelledby="cartDropdown">
							   			<ul>
							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/9.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->

							   						<div class="item_deatils float_left">
							   							<h6>Bột nghệ</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 34.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>

							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/10.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
							   						
							   						<div class="item_deatils float_left">
							   							<h6>Cà phê Jeans nguyên chất</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 26.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>

							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/11.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
							   						
							   						<div class="item_deatils float_left">
							   							<h6>Sôcôla Columbia</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 26.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>
							   			</ul>

							   			<div class="cart_total clear_fix">

							   				<span class="total font_fix float_left">Tổng cộng - 140$</span>
							   				<a href="giohang.html" class="s_color_bg float_right tran3s">Xem giỏ hàng</a>
							   			</div>
							   		</div> <!-- End of .cart_list -->
							    </div>

							</div>

						</div>

					</div>
				</div> 
				<!-- End of .bottom_header -->
			</header>