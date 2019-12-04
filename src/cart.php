<!DOCTYPE html>
<html>
<?php require_once('config.php'); ?>
<?php 
  /*if(isset($_SESSION["sess_user"])){
    echo "<script>";
    echo "document.getElementById('login').style.display = 'none';";
    echo "</script>";
  }*/
  try{
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_select = "select * from cart order by id";
    $user_info = $pdo->query($sql_select);

    #$pdo = null;
  }

  catch (PDOException $e) {    
    die( $e->getMessage() ); 
  } 
?>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Add_ons/css/common.css">
  <link rel="stylesheet" href="../Add_ons/css/cart.css">
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

            <li class="nav-item active">
              <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Cart"href="Cart.php"><i class="fa fa-shopping-cart"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="login" href="account.php">Login/Register</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>

  <!--Nav bar END-->

  <!--Cart BEGIN -->

  <main class="page">
    <section class="shopping-cart dark">
      <div class="container">
            <div class="block-heading">
              <h2>Shopping Cart</h2>
              <p>Thank you for Shopping with us!!!<br> Please Check Your Cart!</p>
            </div>
            <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">

                    <?php
                      $Check = False;
                        while ($row = $user_info->fetch() ) {
                          echo '<div class="product">';
                             echo '<div class="row">';
                              echo '<div class="col-md-3">';
                                echo '<img class="img-fluid mx-auto d-block image" src="../'.$row['src'] .'">';
                              echo '</div>';
                              echo '<div class="col-md-8">';
                                echo '<div class="info">';
                                  echo '<div class="row">';
                                    echo '<div class="col-md-5 product-name">';
                                      echo '<div class="product-name">';
                                        echo '<a href="#">'. $row['name'] .'</a>';
                                        echo '<div class="product-info">';
                                          echo '<div>Dimention: <span class="value">(5 x 5 x 5) inch </span></div>';
                                          echo '<div>Sold by: <span class="value">'.$row['soldby'].'</span></div>';
                                        echo '</div>';
                                      echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-md-4 quantity">';
                                      echo '<label for="quantity">Quantity:</label>';
                                      echo '<input id="quantity" type="number" value ="1" class="form-control quantity-input">';
                                    echo '</div>';
                                    echo '<div class="col-md-3 price">';
                                      //echo '<label for="price">Price:</label>';
                                      echo '<span id = "price">$'.$row['price'].'</span>';
                                    echo '</div>';
                                  echo '</div>';
                                echo '</div>';
                              echo '</div>';
                            echo '</div>';
                          echo'</div>';
                          $Check = True;
                        }
                        if ($Check == False){
                            echo("No item in the Cart!!!");
                        }
                    ?>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="summary">
                <h3>Summary</h3>
                <div class="summary-item"><span class="text">Subtotal</span><span class="price">$0</span></div>
                <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                <div class="summary-item"><span class="text">Total</span><span class="price">$0</span></div>
                <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
  </main>

  <!--Cart END-->
  
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
            <ul class="list-unstyled quick-links">
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
            <ul class="list-unstyled quick-links">
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
  <script src="main.js"></script>
</body>

</html>