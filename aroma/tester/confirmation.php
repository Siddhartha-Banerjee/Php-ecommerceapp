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
  <title>Aroma Shop</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

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
              <a href="cart.html"><li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo $count ?></span></button> </li></a>
             
                       <?php if(isset($_SESSION['web12'])) {  ?>
               <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
               <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false"><h5><i class="fa fa-user fa-2x"></i>  <?php echo $_SESSION['web12']['username'] ?></h5></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="cpass.php">Change Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                  
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
  
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Order Confirmation</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Order Details Area =================-->
  <section class="order_details section-margin--small">
    <div class="container">
      <p class="text-center billing-alert">Thank you. Your order has been received.</p>
      <div class="row mb-5">
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Order Info</h3>
            <table class="order-rable">
              <tr>
                <td>Order number</td>
                <?php $q1=mysqli_query($connection,"SELECT max(date) FROM orders WHERE cusid='$id'");
                  $or=mysqli_fetch_array($q1); ?>
                <td>: 60235<?php echo mysqli_num_rows($q1); ?></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>: <?php echo $or[0];?></td>
              </tr>
              <tr>
                <td>Total</td>
                <td>:₹<?php echo $_GET['a']?></td>
              </tr>
              <tr>
                <td>Payment method</td>
                <td><?php if($_GET['m']==1) echo "Debit Card"; else echo "Cash on Delivery"; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Billing Address</h3>
            <table class="order-rable">
             <?php $q1=mysqli_query($connection,"SELECT * FROM customers WHERE id='$id' ");
             $row=mysqli_fetch_array($q1); ?>
              <tr>
                <td><?php echo $row[4] ?></td>
                
              </tr>
              
            </table>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Shipping Address</h3>
            <table class="order-rable">
              <tr>
                <td><?php echo $row[5] ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $q2=mysqli_query($connection,"SELECT products.id,products.pname,products.price,order1.qty FROM products,order1 WHERE order1.pid=products.id");
              while($row=mysqli_fetch_array($q2)){ ?>
              <tr>
                <td>
                  <p><?php echo $row[1] ?></p>
                </td>
                <td>
                  <h5>x <?php echo $row[3] ?></h5>
                </td>
                <td>
                  <p>₹<?php echo $row[2]*$row[3]; ?></p>
                </td>
              </tr>
              <?php } ?>
              <tr>
                <td>
                  <h4>Total</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p>₹<?php echo $_GET['a'] ?></p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Order Details Area =================-->
<?php 
$q3=mysqli_query($connection,"DELETE FROM order1");
?>


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
                <p>Guru Nanak Institute of Technology</p>
  
                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Phone Number
                </p>
                <p>
                 8017411872 <br>
                 9330103639 <br>
                 9830775655 <br>
                 8620983940 <br>
                 8945831411 <br>
                 9804601916
                </p>
  
                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  sidban1999@gmail.com <br>
                  puja.banik.2709@gmail.com <br>
                  sunneshamudi2015@gmail.com<br>
                  diyashamajumdar1998@gmail.com<br>
                  souvikdas658@gmail.com<br>
                  tatuchakraborty710@gmail.com
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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