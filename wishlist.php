
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Wishlist | Shopit</title>
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
<?php include('header.php');?>
	<section id="cart_items">
		<div class="container">

<div class="table-responsive cart_info ">
  <table class="table table-condensed">


<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rows=$database->getWishlist();
if($rows != NULL){
  ?>
  <thead>
    <tr class="cart_menu text-center">
                  <td class="image">Item</td> 
                  <td class="description">Description</td>
                  <td class="price">Price</td>
                  <td class="price">Reserve Price</td>
                  <td class="price">Quantity</td>
                  <td class="price">Remove</td>
                </tr>
  </thead>

  <tbody>
  <?php
foreach($rows as $row){
 ?>
 <tr class="tbody  text-center">
              <td class="cart_product  col-sm-3">
                <a href="product.php?q=<?=$row['itemId'];?>"><div class="img"><img src="<?=$row['s_url'];?>" alt=""></div></a>
              </td>
              <td class="cart_description  col-sm-3">
                <h4><a href=""><?=$row['itemname'];?></a></h4>
                <p><?=$row['description'];?></p>
              </td>
              <td class="cart_price  col-sm-2">
                <p>KSh. <?=$row['price'];?></p>
              </td>
              <td class="cart_total  col-sm-2">
                <p class="cart_total_price"><span class='fnt'>KSh.</span> <?=$row['amount'];?></p>
                <p>(50% of the original price)</p>
              </td>
              <td class="cart_quantity  col-sm-1">
                <div class="cart_quantity_button">
                  <a class="cart_quantity_down" href=""> 1 </a>
                </div>
              </td>

              <td class="cart_delete  col-sm-1">
<style>
.fnt{
  font-size: 16px !important;
}
.cart_total_price{
  padding:0px !important;
    margin:0px !important;
}
</style>
<form class="form-item" method="POST" action="process.php">
<?php
echo '
<input  type="hidden" name="type" value="remove_wish"/>
<input  type="hidden" name="wishlist" value="true"/>';
echo '
<input type="hidden" name="remove_item" value="'.$row['itemId'].'" />';
echo '<button type="submit" id="button" class="btn btn-secondary btn-sm ">Remove</button>';
?>
              </td>
            </tr>
<tr>  <td>
            <div class="col-md-11 text-right">
              <a onclick="" href="stk.php?q=<?=$row['amount'];?>&n=<?=$session->phoneNo;?>&t='wish'" class="btn btn-default add-to-cart"><i class="fa fa-phone"></i>Pay with MPESA</a>
            </div>  </td>
</tr>
<?php
}
}else{
  echo "<h3 style='text-align:center;'>Wishlist is empty...</h3>";
}
?>

</tbody>
</table>
</div>
</div>
</section> <!--/#cart_items-->



<?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
