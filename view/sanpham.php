                                     
								
<!-- Menu ******************************* -->
<div class="theme_menu color1_bg">
				<div class="container">
				  <nav class="menuzord pull-left" id="main_menu">
					<ul class="menuzord-menu">
					  <li><a href="index.php">Trang chủ</a></li>
					  <li><a href="shop.html">Giới thiệu</a></li>
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
			                    <h1>sản phẩm <br><strong><?=$tendm?></strong></h1>
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
				                    <li>SẢN PHẨM</li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
			</section>
            <br>
                              
                                     <div class="shop_page featured-product">
							        	
						        		<div class="row">
							            <?php
                                            $i=0;
                                            foreach($dssp as $sp){
                                              extract($sp);
                                              $linksp = 'index.php?act=sanphamct&idsp='.$id; 
                                              $hinh=$img_path.$img;
                                              if(($i==2)||($i==5)||($i==8)||($i==11)){
                                                $mr="mr";
                                              }else{
                                                $mr="";
                                              }
                                              $linksp="index.php?act=sanphamct&idsp=".$id;
                                              echo '<div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
                                              <div class="inner-box">
                                                  <div class="single-item center">
                                                      
                                                      <figure class="image-box"><img src="'.$hinh.'" alt=""><div class="product-model new">New</div></figure>
                                                      <div class="content">
                                                          <h3><a href="#">'.$name.'</a></h3>
                                                          <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                                          <div class="price">$12.99 <span class="prev-rate">'.$price.'</span></div>
                                                      </div>
                                                      <div class="overlay-box">
                                                          <div class="inner">
                                                              
                                                              <div class="top-content">
                                                                  <form action="index.php?act=addtocart" method="post" class="fa">
                                                                  <ul>
                                                                      <li><a href="index.php?act=sanphamct"><span class="fa fa-eye"></span></a></li>
                                                                      
                                                                      <li class="tultip-op"><span class="tultip">
                                                                          <input type="hidden" name="id" value="'.$id.'">
                                                                          <input type="hidden" name="name" value="'.$name.'">
                                                                          <input type="hidden" name="img" value="'.$img.'">
                                                                          <input type="hidden" name="price" value="'.$price.'">
                                                                          <i class="fa fa-sort-desc"></i><input type="submit" name="addtocart" value="Add to cart">
                                                                          
                                                                      </span><button type="submit" name="addtocart" style="width: 40px;"><span class="icon-icon-32846"></span></button>
                                                                      
                                                                      </li>
                                                                      <li><a href=""><span class="fa fa-heart-o"></span></a></li>
                                                                  </ul>
                                                                  </form>
                                                              </div>
                                                              <div class="bottom-content">
                                                                  <h4><a href="#">It Contains:</a></h4>
                                                                  <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      
                                                  </div>
                                              </div>
                                              </div>';
                                            }
								           ?>
						        		</div> <!-- End of .row -->
							        	
							        </div> <!-- End of .shop_page -->