
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Success | Shopit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  	<link href="css/style.css" rel="stylesheet">
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
<?php include('header.php');?>
<section id="slider"><!--slider-->
  <div class="container">
    <div class="row">
      <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>
                          <h2 class="text-center"><?=$session->username;?>, your payment was successful!</h2>
                          <h5 class="text-center mb30">Order details have been sent to <?=$session->email;?></h5>
                      <ul class="order-payment-list list mb30">

                            <?php
                            $email;
                            if(isset($_SESSION["cartproducts"]) ){
                            foreach ($_SESSION["cartproducts"] as $key => $cart_itm){
                            $name=$cart_itm["itemname"];
                            $product_price = $cart_itm["price"];
                            $image=$cart_itm['image'];
                            $itemid=$cart_itm['itemid'];
                            $desc=$cart_itm['desc'];
                            $qty=$cart_itm['qty'];
?>
                              <li>
                                  <div class="row">
                                      <div class="col-xs-2">
                                          <img src="<?=$image;?>" style="width:50% !important;"/>
                                      </div>
                                      <div class="col-xs-6">
                                          <h5><i class="fa fa-money"></i> <?=$name;?></h5>
                                            <p><?=$desc;?></p>
                                          <p><small>July 23, 2019</small>
                                          </p>
                                      </div>
                                      <div class="col-xs-2">
                                          <p class="text-right"><span class="text-lg">Ksh <?=$product_price;?></span>
                                          </p>
                                      </div>
                                      <div class="col-xs-2">
                                          <p class="text-right"><span class="text-lg"> <? if(isset($_SESSION['mpesa'])){echo $_SESSION['mpesa'];}?></span>
                                          </p>
                                      </div>
                                  </div>
                              </li>
                      <?php   }
                        }

                         ?>
                          </ul>

<div class="alert" >
  <?php
$rows=$database->getAddress($session->Id);
   ?>
  <h4 class="text-center">Delivery address</h4>
<h5 class=" text-center">City : <?=$rows['city'];?> </h5>
<h5 class="xt-small text-center">Street :  <?=$rows['street'];?></h5>
<h5 class="ext-small text-center">House Number : <?=$rows['hseno'];?></h5>
</div>

                          <h4 class="text-center">You might also need in our latest outfits</h4>
                          <ul class="list list-inline list-center">
                              <li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> African Camo Print</a>
                                  <p class="text-center lh1em mt5"><small>30<br> from Ksh 1000</small>
                                  </p>
                              </li>
                              <li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> African Camo Print</a>
                                  <p class="text-center lh1em mt5"><small>30<br> from Ksh 1000</small>
                                  </p>
                              </li>
                              <li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> African Camo Print</a>
                                  <p class="text-center lh1em mt5"><small>30<br> from Ksh 1000</small>
                                  </p>
                              </li>
                              <li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> African Camo Print</a>
                                  <p class="text-center lh1em mt5"><small>30<br> from Ksh 1000</small>
                                  </p>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="gap"></div>
              </div>
</div>

    </div>
  </section>

<?php include('footer.php'); unset($_SESSION['cartproducts']); unset($_SESSION['mpesa']); unset($_SESSION['orderid']);?>

    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
        <script src="js/nicescroll.js"></script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>

</body>
</html>
