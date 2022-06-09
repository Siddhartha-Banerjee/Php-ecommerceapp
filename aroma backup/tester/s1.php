<?php include('config.php');
if(!isset($_SESSION['web12']))
{ ?> <script type="text/javascript">window.location.href="login1.php"</script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Speakers</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
             
              <li class="nav-item"><a class="nav-link" href="tracking-order.php">Track</a></li>
              <li class="nav-item"><a class="nav-link" href="contact1.php">Contact us/About</a></li>
            </ul>
            <ul class="nav-shop">
              <form method="POST" action="search.php">
                 <li class="nav-item"><input type="text" name="product" placeholder="Search Product"></li>
                <button><i class="ti-search"></i></button>
              </form>
              <?php $id=$_SESSION['web12']['id']; 
              	$q=mysqli_query($connection,"SELECT * FROM cart$id");
              	$count=mysqli_num_rows($q); ?>
              	<br>
              <a href="cart.php"><li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo $count ?></span></button> </li></a>
              	       <?php if(isset($_SESSION['web12'])) {  ?>
               <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
               <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false"><h5><i class="fa fa-user fa-2x"></i>  <?php echo $_SESSION['web12']['username'] ?></h5></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="nav-link" href="cpass.php">Change Password</a></li>
                </ul>
            <?php } ?>
              </li>
            </ul>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	
	<!--================ End Header Menu Area =================-->
	
	<!-- ================ start banner area ================= 	
	<section class="blog-banner-area" id="blog">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop Single</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	 ================ end banner area ================= -->


  <!--================Single Product Area =================-->
	<?php $proid=$_GET['id'];
	  $q=mysqli_query($connection,"SELECT * FROM products WHERE id='$proid'");
	  $row=mysqli_fetch_array($q);
	  ?>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo $row[3] ?>" alt="">
						</div>
						<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row[1] ?></h3>
						<h2>₹ <?php echo $row[4] ?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Speakers</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p><?php echo $row[5] ?></p>
						<div class="product_count">
              <label for="qty">Quantity:</label>
              				<form method="POST">
								<input type="number" name="qty" value=1>
								<button style="line-height:40px;height:50px;width:100px;border:1px solid #384aeb;border-radius:30px;color:#222;font-weight:500;background:#384aeb;color:#fff;">Add to Cart</button>
								<input type="text" name="pname" value="<?php echo $row[1] ?>" hidden>
								<input type="text" name="pfile" value="s" hidden>
								<input type="text" name="ifile" value="<?php echo $row[3] ?>" hidden>
								<input type="text" name="price" value="<?php echo $row[4] ?>" hidden>
								               
							</form>
							<?php
							if (isset($_POST['pname'])) {
								$pname=$_POST['pname'];
								$pfile=$_POST['pfile'];
								$ifile=$_POST['ifile'];
								$price=$_POST['price'];
								$qty=$_POST['qty'];
								$id=$_SESSION['web12']['id'];
								$q1=mysqli_query($connection,"SELECT * FROM cart$id WHERE pname='$pname' AND qty='$qty'");
								$q2=mysqli_query($connection,"SELECT * FROM cart$id WHERE pname='$pname'");
								if(mysqli_num_rows($q1)==1)
								{
									?>
									 <script type="text/javascript">alert("Item already added to cart")</script>
									 <script type="text/javascript">window.location.href="s1.php?id=<?php echo $proid ?>"</script>
								
							<?php
								}
								elseif(mysqli_num_rows($q2)==1)
									{$q=mysqli_query($connection,"UPDATE cart$id SET qty='$qty' WHERE pname='$pname'" );
								if ($q) {
									?> <script type="text/javascript">window.location.href="s1.php?id=<?php echo $proid ?>"</script>
								
							<?php	}
						}
						else
						{$q=mysqli_query($connection,"INSERT INTO cart$id VALUES(0,'$proid','$pname','$pfile','$ifile','$price','$qty')");
				        if($q) { ?>	<script type="text/javascript">window.location.href="s1.php?id=<?php echo $proid ?>"</script>
					<?php 
							}
					 	}
							}
							

							?>
						</div>
						<!-- <div class="card_area d-flex align-items-center">
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Comments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?php echo $row[5]?></p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								
								<tr>
									<td>
										<h5><b>Battery</b></h5>
									</td>
									<td>
										<h5><?php echo $row[9] ?> mAh</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5><b>Warrenty</b></h5>
									</td>
									<td>
										<h5><?php echo $row[10] ?></h5>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2019 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>It is a very good product, no doubt redmi is the best barand now a days and it is their best product I have used</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Peter Parker</h4>
											<h5>14th Feb, 2019 at 05:55 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>It is another best product from redmi,It is more user friendly than their other phones</p>
								</div>
								
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>It is a very good product, no doubt redmi is the best barand now a days and it is their best product I have used</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Peter Parker</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>It is another best product from redmi,It is more user friendly than their other phones</p>
								</div>
								
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<p>Your Rating:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Outstanding</p>
                <form action="#/" class="form-contact form-review mt-3">
                  <div class="form-group">
                    <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Enter email address" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control different-control w-100" name="textarea" id="textarea" cols="30" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="form-group text-center text-md-right mt-3">
                    <button type="submit" class="button button--active button-review">Submit Now</button>
                  </div>
                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!--================ Start related Product area =================-->  
	<section class="related-product-area section-margin--small mt-0">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="single-product1.html"><img src="img/product/product1.png" alt=""></a>
              <div class="desc">
                  <a href="single-product1.html" class="title">iPhoneX</a>
                  <div class="price">Rs 54999.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product2.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">JBL Go 2</a>
                <div class="price">Rs 799.00</div>
              </div>
            </div>
            
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product3.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Redmi Note 8</a>
                  <div class="price">Rs 8999.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product4.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Boat Rockz-234</a>
                <div class="price">Rs 999.00</div>
              </div>
            </div>
            
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product5.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Mi 20000mah power bank</a>
                  <div class="price">Rs 1249.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product6.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Sandisk 128gb sd card</a>
                <div class="price">Rs 1049.00</div>
              </div>
            </div>
            
          </div>
        </div>

        
      </div>
		</div>
	</section>
	<!--================ end related Product area =================-->  	

  <!--================ Start footer Area  =================-->	
	<footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title large_title">Our Mission</h4>
              <p>
                So seed seed green that winged cattle in. Gathering thing made fly you're no 
                divided deep moved us lan Gathering thing us land years living.
              </p>
              <p>
                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
              </p>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Quick Links</h4>
              <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Product</a></li>
                <li><a href="contact1.php">Contact</a></li>
              </ul>
            </div>
          </div>
          
          <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Contact Us</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Head Office
                </p>
                <p>123, SDF Block , Secter V , Saltlake</p>
  
                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Phone Number
                </p>
                <p>
                 8017411872 <br>
                 9330103639 <br>
                 9748449538
                </p>
  
                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  sisban1999@gmail.com <br>
                  puja.banik.2709@gmail.com <br>
                  sohom138@gmail.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>