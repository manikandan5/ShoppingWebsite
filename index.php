<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | RLStores</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-3">
          </div>
          <div class="col-sm-3">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +2950188821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> rlstores@gmail.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-2">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
          </div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
                <?php
                if(isset($_SESSION['name'])){
                ?>
                <li><a href="index.php"><i class="fa fa-user"></i>
                <?php
                echo "Welcome,";
                echo $_SESSION['name'];?></a></li>
                <li><a href="logoff.php"><i class="fa fa-unlock"></i>LogOut</a></li>
                <?php
                }
                else {
                  ?>
                <li><a href="login.php"><i class="fa fa-lock"></i>
                <?php
                echo "Login";
                } ?>
                </a></li>
							</ul>
							<ul>
                  &nbsp;
              </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
				                <li><a href="shop.php">Products</a></li>
				                <li><a href="about-us.php">About Us</a></li>
				                <li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>RAJALAKSHMI STORES</h1>
									<h2>ONE SHOP FOR AYURVEDIC AND DEITY PRODUCTS</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>RAJALAKSHMI STORES</h1>
									<h2>Leading Ayurveda Retail Store</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
								  <h1>RAJALAKSHMI STORES</h1>
								  <h2>ONE SHOP FOR AYURVEDIC AND DEITY PRODUCTS </h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" height = "5000" width="1000"/>
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordian" href="#sportswear"> <span class="badge pull-right"><em class="fa fa-plus"></em></span>AYURVEDIC</a></h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="syrup.html">Syrup </a></li>
											<li><a href="churna.html">Churna </a></li>
											<li><a href="health.html">Health and Wellness </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordian" href="#mens"> <span class="badge pull-right"><em class="fa fa-plus"></em></span> RELIGIOUS </a> </h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Pooja</a></li>
											<li><a href="#">Sacred</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
							<div class="panel panel-default">
							</div>
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
						</div><!--/brands_products-->						<!--/price-range-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
                                                   mysql_connect('localhost','manikandan5','admin1234');
                                                   mysql_select_db('InfoArch');
                                                   $select = mysql_query("select * from products;");
                                                   while($row = mysql_fetch_assoc($select))
                                                   {
                                                     ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $row['image'];?>" alt="" height="225" width="100"/>
											<h2><?php echo $row['price'];?></h2>
											<p><?php echo $row['name'];?></p>
											<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $row['price'];?></h2>
												<p><?php echo $row['price'];?></p>
												<a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>

						<?php
                         }
                        ?>

						

					</div><!--features_items-->					<!--/category-tab-->					<!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container"> </div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
						  <h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
<div class="col-sm-2">
			<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About RLStores</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Store Location</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About RLStores</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 RLSTORE Inc. All rights reserved.</p>
					<p class="pull-right">Template by http://html5up.net/</p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
