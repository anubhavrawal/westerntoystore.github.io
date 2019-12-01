<!DOCTYPE html>
<?php require_once('config.php'); ?>

<?php
  try{
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_select = "select * from useraccounts order by username";
    $user_info = $pdo->query($sql_select);

    '''$sql_all = "select * from Employees order by EmployeeID";
    $tmp = $pdo->query($sql_all);
    $Address_info = $tmp->fetchAll();'''

    $pdo = null;
  }

  catch (PDOException $e) {    
    die( $e->getMessage() ); 
  } 


?>


<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../Add_ons/css/common.css">
  <link rel="stylesheet" href="../Add_ons/css/account.css">
	<link rel="stylesheet" href="../Add_ons/bootstrap_4_0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
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
            <a class="nav-link" href="catlog.php">Puzzels</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="action.php">Action</a>
          </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Cart"href="Cart.php"><i class="fa fa-shopping-cart"></i></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" id="login" href="account.php">Login/Register</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>

  <!--Nav bar END-->

  <!--FORM BEGIN-->

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" action="foobar_submit.php" method="post" >
                <div class="form-label-group">
                  <?php
                  while ($row = $user_info->fetch()) {


                  }
                  echo"<input type='email' id='inputEmail' class='form-control' placeholder='Email address' required autofocus>"
                  ?>
                  <label for="inputEmail">Email address</label>
                </div>
  
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
  
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fa fa-google mr-2"></i> Sign in with Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fa fa-facebook mr-2"></i> Sign in with Facebook</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!--FORM END-->
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

	<script src="../Add_ons/bootstrap_4_0/jquery/jquery.min.js"></script>
	<script src="../Add_ons/bootstrap_4_0/js/bootstrap.min.js"></script>
</body>

</html>