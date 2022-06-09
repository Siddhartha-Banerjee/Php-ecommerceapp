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
  <title>Aroma Shop - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
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
                  <li class="nav-item"><a class="nav-link" href="cpass.php">Change Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                  
                </ul>

              </li>
            </ul>
         <?php   } ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Shop is fun</h4>
              <h1>Browse Our Premium Product</h1>
              <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
              <a class="button button-hero" href="#">Browse Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide1.jpg" alt="" class="img-fluid">
          <a href="phone.php" class="hero-carousel__slideOverlay">
            <h3>Phones</h3>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide2.png" alt="" class="img-fluid">
          <a href="speaker.php" class="hero-carousel__slideOverlay">
            <h3>Speakers</h3>
            <h3>Headphones</h3>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide3.png" alt="" class="img-fluid">
          <a href="power-bank.php" class="hero-carousel__slideOverlay">
            <h3>Power Banks</h3>
          </a>
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
               <a href="phone1.php?id=<?php echo "11" ?>"><img class="card-img" src="img/product/product1.png" alt=""></a>
                <ul class="card-product__imgOverlay">
                  <li><a href="phone1.php?id=<?php echo "11" ?>"><button><i class="ti-search"></i></button></a></li>
                  <li><a href="phone1.php?id=<?php echo "11" ?>"><button><i class="ti-shopping-cart"></i></button></a></li>
                  <li><a href="phone1.php?id=<?php echo "11" ?>"><button><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Phone</p>
                <h4 class="card-product__title"><a href="phone1.php?id=<?php echo "11" ?>">Iphone X</a></h4>
                <p class="card-product__price">₹ 54999.00</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
               <a href="s1.php?id=<?php echo "25" ?>"><img class="card-img" src="img/product/product2.png" alt=""></a>
                <ul class="card-product__imgOverlay">
                  <li><button><a href="s1.php?id=<?php echo "25" ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="s1.php?id=<?php echo "25" ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="s1.php?id=<?php echo "25" ?>"><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Speaker</p>
                <h4 class="card-product__title"><a href="s1.php?id=<?php echo "25" ?>">Jbl Go 2</a></h4>
                <p class="card-product__price">₹ 2999.00</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                 <a href="phone1.php?id=<?php echo "3" ?>"><img class="card-img" src="img/product/product3.png" alt=""></a>
                <ul class="card-product__imgOverlay">
                  <li><button><a href="phone1.php?id=<?php echo "3" ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="phone1.php?id=<?php echo "3" ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="phone1.php?id=<?php echo "3" ?>"><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Phone</p>
                <h4 class="card-product__title"><a href="phone1.php?id=<?php echo "3" ?>">Redmi Note 8 Pro</a></h4>
                <p class="card-product__price">₹ 8999.00</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <a href="s1.php?id=<?php echo "33" ?>"><img class="card-img" src="img/speaker/s12.png" height=168px width=12px alt=""></a>
                <ul class="card-product__imgOverlay">
                  <li><button><a href="s1.php?id=<?php echo "33" ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="s1.php?id=<?php echo "33" ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="s1.php?id=<?php echo "33" ?>"><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Headphone</p>
                <h4 class="card-product__title"><a href="s1.php?id=<?php echo "33" ?>">Boat Rockz-510</a></h4>
                <p class="card-product__price">₹ 3999.00</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <a href="p2.php?id=<?php echo "35" ?>"><img class="card-img" src="img/product/product5.png" alt=""></a>
                <ul class="card-product__imgOverlay">
                  <li><button><a href="p2.php?id=<?php echo "35" ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="p2.php?id=<?php echo "35" ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="p2.php?id=<?php echo "35" ?>"><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>Power Bank</p>
                <h4 class="card-product__title"><a href="p2.php?id=<?php echo "35" ?>">Mi 20000mah Li-polymer Power Bank</a></h4>
                <p class="card-product__price">₹ 1399.00</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <a href="p2.php?id=<?php echo "13" ?>"><img class="card-img" src="img/product/product6.png" alt=""></a>
                <ul class="card-product__imgOverlay">
                    <li><button><a href="p2.php?id=<?php echo "13" ?>"><i class="ti-search"></i></a></button></li>
                  <li><button><a href="p2.php?id=<?php echo "13" ?>"><i class="ti-shopping-cart"></i></a></button></li>
                  <li><button><a href="p2.php?id=<?php echo "13" ?>"><i class="ti-heart"></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>SD Card</p>
                <h4 class="card-product__title"><a href="p2.php?id=<?php echo "13" ?>">Sandisk 128GB sd card</a></h4>
                <p class="card-product__price">₹ 1449.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  


    <!-- ================ offer section start ================= --> 
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>Up To 50% Off</h3>
              <h4>Winter Sale</h4>
              <p>Him she'd let them sixth saw light</p>
              <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

   
    
    <!-- ================ Subscribe section start ================= --> 
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= --> 

    

  </main>


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