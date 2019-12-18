

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
$tax=1;
$wishlstamnt=$database->getWish($itemid);
$amnt= $wishlstamnt['amount'];
$subtotal=$qty*$product_price;
$stotal+=$subtotal;
$itemidarray[$key]=$itemid;
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

      <?php
      $totalamnt=$stotal+$tax-$amnt;
}
?>

</tbody>
</table>
<div class='col-md-12 text-right'>
<a onclick="" href="checkout.php" class="btn btn-default add-to-cart"><i class="fa fa-sign-out"></i>Check Out</a>
</div>

<div class='gap'></div>
<div class='gap'></div>
<div class='gap'></div>
<div class='gap'></div>
<?php
}else{
  echo "<h3 style='text-align:center;'>Shopping cart is empty...</h3>";
}
}
?>
</div>
</div>
</section> <!--/#cart_items-->
