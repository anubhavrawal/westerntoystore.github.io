<!DOCTYPE html>
<?php require_once('config.php'); ?>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Add_ons/css/common.css">
	<link rel="stylesheet" href="../Add_ons/bootstrap_4_0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Add_ons/css/about.css">

  <link href="https://fonts.googleapis.com/css?family=Grenze&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <div class="preload">
    <img src="../img/loading.gif" alt="Loading" />
  </div>
  
  <div class="web-content">
	<!--Nav bar begin-->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-cust static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="logo">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="catlog.php">Puzzel</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="action.php">Action</a>
          </li>

            <li class="nav-item active">
              <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Cart"href="Cart.php"><i class="fa fa-shopping-cart"></i></a>
            </li>

            <?php
              if(isset($_SESSION['sess_user'])){
                echo"</ul>";
                echo'<ul class="navbar-nav">';
                  echo'<!-- Dropdown -->';
                  echo'<li class="nav-item dropdown">';
                   echo'<a class="nav-link dropdown-toggle" id="login" href="#" id="navbardrop" data-toggle="dropdown">'.$_SESSION['sess_user']."</a>";
                   echo'<div id="drop-down" class="dropdown-menu" >';
                    echo'<a class="dropdown-item" href="src/logout.php">Logout</a>';

                   echo'</div>';
                  echo'</li>';
                  echo'</ul>';
              }
              else{
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" id="login" href="account.php">Login/Register</a>';
                echo '</li>';
                echo "</ul>";
              }
            ?>

        </ul>
      </div>
    </div>
  </nav>

	<!--Nav bar END-->

<div class="left img-cont">
    <img class="pic" src="..//img/lf.jpeg" alt="left-img">
</div>

<div class="right img-cont" >
  <img class="pic1" src="..//img/ri.jpg" alt="right-img">
</div>

<div class="container">
	<div class="info">
    <!--<div class="info">-->
		<center><h2 ><b>Welcome To Western Toy Store!</b></h2></center> <br>
		
		<p>Western Toy Store is Western Michigan University's no.1 online toy store. We are 100% authentic and provide money back gurantee within 60 days of purchase.</p>

		<p>We have 100's of unique toys, puzzles, games that can put a smile on your kid's face. We sell produts at a resonable price with amazing offers and discounts.</p>

		<p>It is now even easier to shop at our store. We accept most of the debit and credit cards, ApplePay, Google pay,PayPal and many more. Same day delivery is available in Kalamzoo area. For other areas it takes 3-5 business days to deliver the produts.</p>

		<p>Our team is working best to provide you the best customer service experience. If you want to know more about our service and customer service, please visit our REVIEW page.</p>

		<p>Have any complain or want to contact us? Please call us on <a href="tel:+1(269)8086172">+1(269)8086172</a> or <a href="mailto:info@westtoy.com">EMAIL</a> us. We would love to hear from you!</p>
    </div>
	
	</div>


	<!--Footer begin-->
	<section id="footer">
      <div class="container">
      <div class="row" style="margin-bottom: 20px;" >
          <div class="input-group mb-3" style="width: 40%; margin-left: 31%;">
            <input type="text" class="form-control" placeholder="random@example.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <a href="javascript:void(0);" style="text-decoration: none;"><span class="input-group-text" id="basic-addon2" style="background-color: #f15b28; color: white;">Subscribe</span></a>
            </div>
          </div>
        </div>

        <div class="row text-center text-xs-center text-sm-left text-md-left">

          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="col_one_third">
                <div class="widget clearfix">
                    <h4>Contact Us</h4>
                    <hr>
                    <div>
                      <address>Western Toy Store, Kalamzoo, Michigan</address>
                      <abbr title="Phone Number"><strong>Phone:</strong></abbr>
                      +977-1-5186023                        <br>
                      <abbr title="Email Address"><strong>Email:</strong></abbr>
                      info@westtoy.com                    
                    </div>
                </div>

            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4" id="break">
            <div class="in-marg1">
            <h5 style="">about Western Toy </h5>
            <ul class="list-unstyled quick-links"style="">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>about</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Retail Store Info</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Wester Toy Store is Buying</a></li>
            </ul>
            </div>
          </div>


          <div class="col-xs-12 col-sm-4 col-md-4" >
            <div class="in-marg2">
            <h5 style="">Western Toy Policies</h5>
            <ul class="list-unstyled quick-links" style="">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Shipping Policy</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Return and Cancellation</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Privacy and Security</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Pre-Orders</a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
      <div class="Footer-logo">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" style="margin-top: 20px !important;">
              <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>  

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <p class="h6">Copyright &copy All right Reversed by<a class="text-green ml-2" href="#" target="_blank">Western Toy Store </a></p>
            </div>
          </div> 
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">Image Credit<a class="text-green ml-2" href="#" target="_blank">Google Images </a></p>
              </div>
          </div>
      </div>
    </section>

    <!-- Footer END -->
    <!-- -->
  </div>

  <script src="../Add_ons/js/common.js"></script>
	<script src="../Add_ons/bootstrap_4_0/jquery/jquery.min.js"></script>
	<script src="../Add_ons/bootstrap_4_0/js/bootstrap.min.js"></script>
</body>

</html>