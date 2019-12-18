<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | Shopit</title>
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
	<section id="cart_items">
		<div class="container" style="width:80% !important;">
  <div class='col-md-1'></div>
<div class="col-md-11">
	<h2>Review & Payment</h2>
			<div class="review-payment">

			</div>


  <div class="table-responsive cart_info ">
    <?php
      //include('admin/session.php');
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
      if(isset($_SESSION["cartproducts"])){
  if (count($_SESSION["cartproducts"]) !=0){
     ?>
    <table class="table table-condensed">
      <tbody>

  <?php

  if(!$session->checkLogin()){
    header('location: login.php');
  }

  global $totalamnt;
  $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  if(isset($_SESSION["cartproducts"]) ){
      $subtotal=0;
      $stotal=0;
  foreach ($_SESSION["cartproducts"] as $key => $cart_itm){
  $name=$cart_itm["itemname"];
  $product_price = $cart_itm["price"];
  $image=$cart_itm['image'];
  $itemid=$cart_itm['itemid'];
  $desc=$cart_itm['desc'];
  $qty=$cart_itm['qty'];
  $subtotal+=$product_price;
  $tax=0;
  $wishlstamnt=$database->getWish($itemid);
  $amnt= $wishlstamnt['amount'];
  $subtotal=$qty*$product_price;
  $stotal+=$subtotal;
  $itemidarray[$key][0]=$itemid;
    $itemidarray[$key][1]=$qty;
   ?>
   <tr class="tbody text-center">
                <td class="cart_product col-sm-2">
                    <a href="product.php?q=<?=$itemid;?>"><div class="img"><img src="<?=$image;?>" alt=""></div></a>
                </td>
                <td class="cart_description col-sm-4">
                  <h4><a href=""><?=$name;?></a></h4>
                  <p><?=$desc;?></p>
                </td>
                <td class="cart_price col-sm-2">
                  <p>KSh. <?=$product_price;?></p>
                </td>
                <td class="cart_quantity col-sm-1">
                  <div class="cart_quantity_button cart_price">
                      <p> <?=$qty;?> pcs </p>
                  </div>
                </td>
                <td class="cart_total col-sm-2">
                  <p class="cart_total_price">KSh. <?=($subtotal-$amnt);?></p>
                </td>
                <td class="cart_delete col-sm-1">
                     <form class="form-item" method="post" action="process.php">
  <?php
  echo '
  <input  type="hidden" name="type" value="remove_code"/><input  type="hidden" name="thisid" value="'.$itemid.'"/>
  <input  type="hidden" size="2" name="product_qty['.$itemid.']" value="1"/>';
  echo '<input type="hidden" name="remove_code[]" value="'.$itemid.'" />';
  //echo '<input type="submit" name="rem" value="Remove" />';
  echo ' <button type="submit" id="button" class="btn btn-secondary btn-sm ">Remove</button>';
   ?>

  <input type="hidden" name="returnUrl" value="<?=$current_url; ?>" />
  </form>
                </td>
              </tr>

  <?php
  }
  ?>
        <tr>
  							<td colspan="4">&nbsp;</td>
  							<td colspan="2">
  								<table class="table table-condensed total-result">
  									<tbody><tr>
  										<td>Cart Sub Total</td>
  										<td>Ksh. <?=($stotal)-$amnt;?></td>
  									</tr>
  									<tr>
  										<td>VAT (16%)</td>
  										<td><?=$tax;?></td>
  									</tr>
  									<tr class="shipping-cost">
  										<td>Shipping Cost</td>
  										<td>Free</td>
  									</tr>
  									<tr>
  										<td>Total</td>
  										<td><span>Ksh. <?=$stotal+$tax-$amnt;?></span></td>
  									</tr>
  								</tbody></table>
  							</td>
  						</tr>
        <?php
        $totalamnt=$stotal+$tax-$amnt;
  }
  ?>

  </tbody>
  </table>
<!--
  <div class='col-md-12 text-right'>

  <a onclick="myAjax()" href="stk.php?q=<?=$totalamnt;?>&n=<?=$session->phoneNo;?>" class="btn btn-default add-to-cart">
    <i class="fa fa-phone"></i>Pay with MPESA</a>
 <form action="stk.php" method="POST">
   <input type="hidden" name="phone" value="<?=$session->phoneNo;?>">
   <input type="hidden" name="amnt" value="<?=$totalamnt;?>">
    <button type="submit" class="btn btn-default">Pay with MPESA</button>
<style>
form>.btn:hover{
  background-color: #FE980F !important;
  color:#FFFFFF !important;
  border: 0.3px solid #FFFFFF !important;
}
</style>
  </div>
-->
<?php
$order=$database->addOrder($session->Id,$itemidarray,$totalamnt);
$_SESSION['orderid']=$order;
$database->updateStock($itemidarray);
?>
    <div class='col-md-12 text-right'>
<a class="popup-text btn btn-primary" href="#small-dialog" data-effect="mfp-zoom-out">Proceed to payment</a>

<div id="small-dialog" class="mfp-with-anim mfp-dialog mfp-hide">
<h3>Delivery Address</h3>
<form action="stk.php" method="POST">
<div class="form-group">
<input class="form-control" placeholder="City" type="text" name="city">
</div>
<div class="form-group">
<input class="form-control" placeholder="Street" type="text" name="street">
</div>
<div class="form-group">
<input class="form-control" placeholder="House No" type="text" name="hseno">
</div>
<input type="hidden" autocomplete="off" name="id" value="<?=$session->Id;?>">
<input type="hidden"autocomplete="off" name="phone" value="<?=$session->phoneNo;?>">
<input type="hidden"autocomplete="off" name="amnt" value="<?=$totalamnt;?>">
<input class="btn btn-primary" value="Pay with Mpesa" type="submit">
</form>
</div>
</div>

  <div class='gap'></div>

  <?php
  }else{
    echo "<h3 style='text-align:center;'>Shopping cart is empty...</h3>";
  }
  }
  ?>




  </div>
  </section> <!--/#cart_items-->
</div>

</div>

		</div>
	</section> <!--/#cart_items-->



  <?php include('footer.php');?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
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
