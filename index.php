<!DOCTYPE php>
<php>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="Add_ons/bootstrap_4_0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="Add_ons\js\common.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  
  <div class="preload">
    <img src="img/loading.gif" alt="Loading" />
  </div>
  
  <div class="web-content">
    <!--Nav bar begin-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-cust static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
              <img src="img/logo.png" alt="logo">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="src/about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="src/catlog.php">Puzzels</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="src/action.php">Action</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Cart"href="src/Cart.php"><i class="fa fa-shopping-cart"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="login" href="src/account.php">Login/Register</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!--Nav bar END-->

    <!-- Carousel BEGIN -->

    <div id="crou_main" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#crou_main" data-slide-to="0" class="active"></li>
        <li data-target="#crou_main" data-slide-to="1"></li>
        <li data-target="#crou_main" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cors1.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
          <img src="img/cors2.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
          <img src="img/cors3.jpg" alt="New York" >
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" id='slide_ctrl' href="#crou_main" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" id='slide_ctrl' href="#crou_main" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <!-- Carousel END -->

    <!--lightbox BEGIN -->

    <section class="gallery-block grid-gallery">
          <div class="container">

              <div class="heading">
                  <h2>TOP SELLING</h2>
              </div>

              <div class="row">
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image1.jpg">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>

                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image2.jpg">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>

                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image3.jpg">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>
                      </a>

                  </div>
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image4.jpg" alt="">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>

                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image5.jpg" alt="Batman">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>

                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item">
                      <a class="lightbox" href="#">
                          <img class="img-fluid image scale-on-hover" src="img/image6.jpg" alt="Star-trooper">

                          <div class="middle">
                              <button type="button" onclick="window.location.href = 'src/cart.php';" class="btn btn-primary">Add to Cart</button>
                          </div>
                          
                      </a>
                  </div>

              </div>
          </div>
    </section>
    <!--lightbox END -->


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
              <h5 style="">About Western Toy </h5>
              <ul class="list-unstyled quick-links"style="">
                <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
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
        </div>
      </section>

      <!-- Footer END -->
      <!-- -->
  </div>
  <script src="Add_ons\js\common.js"></script>
	<script src="Add_ons/bootstrap_4_0/jquery/jquery.min.js"></script>
	<script src="Add_ons/bootstrap_4_0/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>

</php>