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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
      <div class="collapse navbar-collapse collapse hide" id="navbarResponsive">
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

          </ul>

          <?php
            if(isset($_SESSION['sess_user'])){
              echo'<ul class="navbar-nav">';
                echo'<!-- Dropdown -->';
                echo'<li class="nav-item dropdown">';
                 echo'<a class="nav-link dropdown-toggle" id="login" href="#" id="navbardrop" data-toggle="dropdown">'.$_SESSION['sess_user']."</a>";
                 echo'<div id="drop-down" class="dropdown-menu" >';
                  echo'<a class="dropdown-item" href="logout.php">Logout</a>';

                 echo'</div>';
                echo'</li>';
                echo'</ul>';
            }
            else{
              echo '<li class="nav-item">';
                echo '<a class="nav-link" id="login" href="account.php">Login/Register</a>';
              echo '</li>';
            }
          ?>

            
        
        

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
                                          echo '<div>Unit Price($): <span class="value" id ="u_price">'.$row['price'].'</span></div>';
                                        echo '</div>';
                                      echo '</div>';
                                    echo '</div>';

                                    echo '<div class="col-md-3 quantity">';
                                      echo '<label for="quantity">Quantity:</label>';
                                      echo '<input onChange="cart_updt();" id="quantity" type="number" min="1" max = "10" value ="1" class="form-control quantity-input">';
                                    echo '</div>';

                                    echo '<div class="col-md-2 price">';
                                      echo '<label id = "p_label" for="price">Price</label>';
                                      echo '<span class = "t_price">12</span>';
                                    echo '</div>';

                                    echo '<div class="col-md-2 del">';
                                      echo '<a href="?id='.$row['id'].'"><button type="button" class="btn btn-danger">Delete</button></a>';
                                    echo '</div>';

                                    if (isset($_GET['id'])) {
                                      $id_val = $_GET['id'];
                                      try {
                                        $statement = $pdo->prepare("DELETE FROM cart WHERE id = $id_val");
                                        $statement->execute();
                                        echo "<script>";
                                          echo "alert('Sucessfully deleted from the cart!!!!')";
                                        echo "</script>";
                                        header('Location: cart.php');
                                      }
                                      catch (PDOException $e) {
                                        
                                      }
                                      
                                    }

                                  echo '</div>';
                                echo '</div>';
                              echo '</div>';
                            echo '</div>';
                          echo'</div>';
                          $Check = True;
                        }
                        if ($Check == False){
                            echo("<h2>No item in the Cart!!!</h2>");
                        }
                    ?>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="summary">
                <h3>Summary</h3>
                <div class="summary-item"><span class="text">Subtotal</span><span class="price" id = "subtotal">$0</span></div>
                <div class="summary-item"><span class="text">Discount</span><span class="price" id = "discount" >$0</span></div>
                <div class="summary-item"><span class="text">Shipping</span><span class="price" id = "shipping" >$0</span></div>
                <div class="summary-item"><span class="text">Total</span><span class="price" id = "total" >$0</span></div>
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#checkoutModal" >Checkout</button>

                <!--Modal dialoag for checkout-->
                <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">

                        <div class="container-fluid">
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                  <div id="pay-invoice" class="card">
                                      <div class="card-body">
                                          <div class="card-title">
                                              <h3 class="text-center">Pay Invoice</h3>
                                          </div>
                                          <hr>
                                          <form method="post" novalidate="novalidate" class="needs-validation">
                                              <div class="form-group text-center">
                                                  <ul class="list-inline">
                                                      <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                                      <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                                      <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                                      <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="form-group">
                                                  <label for="cc-payment" class="control-label ">Payment amount</label>
                                                  <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="100.00">
                                                  <span class="invalid-feedback">Enter the payment amount</span>
                                              </div>
                                              <div class="form-group has-success">
                                                  <label for="cc-name" class="control-label ">Name on card</label>
                                                  <input id="cc-name" name="cc-name" type="text" class="form-control cc-name" required autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                  <span class="invalid-feedback">Enter the name as shown on credit card</span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="cc-number" class="control-label">Card number</label>
                                                  <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required="" pattern="[0-9]{16}">
                                                  <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                                              </div>
                                              <div class="row">
                                                  <div class="col-6">
                                                      <div class="form-group">
                                                          <label for="cc-exp" class="control-label ">Expiration</label>
                                                          <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                                          <span class="invalid-feedback">Enter the expiration date</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-6">
                                                      <label for="x_card_code" class="control-label ">Security code</label>
                                                      <div class="input-group">
                                                          <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                                          <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="x_zip" class="control-label ">Postal code</label>
                                                  <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                                                  <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                                              </div>
                                              <div>
                                                <button id="payment-button" type="submit" class="btn btn-sm btn-info btn-block">
                                                    <i class="fa fa-lock fa-sm"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                </button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Modal End-->

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
  <script src="../Add_ons/js/cart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../Add_ons/bootstrap_4_0/jquery/jquery.min.js"></script>
  <script src="../Add_ons/bootstrap_4_0/js/bootstrap.min.js"></script>
</body>

</html>