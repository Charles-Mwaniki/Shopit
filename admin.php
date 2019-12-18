

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Admin | Shopit</title>
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
<?php
 include('header.php');
if(!$session->isAdmin()){
  header("Location: login.php");
}
 ?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="login-form"><!--login form-->
						<h2>Add items to Shop</h2>
            <form action="uploadHandler.php" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
              <label>Name</label>
      <input type='text' name='itemname' maxlength='150' placeholder="Enter the item name"/>
        <label>Description</label>
      <input type='text' name='description' maxlength='150' placeholder="Enter the description"/>
        <label>Price</label>
      <input type='text' name='price' maxlength='150' placeholder="Enter the item price"/>
      <label>Quantity</label>
    <input type='number' name='qty' maxlength='150' placeholder="Enter the item quantity"/>
  <label>Image </label>
      <input name="userImage" id="imageInput" type="file" />
      <button type="submit"  id="submit-btn">Upload</button>
      </form>


				</div>
				</div>

        <div class="col-sm-7 col-sm-offset-1">
          <div class="login-form"><!--login form-->
            <h2>User Orders</h2>
            <table class="table table-condensed total-result">

              <tbody>
                <?php
          $rows=$database->getOrder();
          if($rows != NULL){
          foreach($rows as $row){
          ?>
          <tr class="tbody text-center">
            <td class="cart_description col-sm-1">
              <h5><a href=""><?=$row['username'];;?></a></h5>
            </td>
                       <td class="cart_product col-sm-3">
                           <a href="product.php?q=<?=$itemid;?>"><div class="img"><img src="<?=$row['m_url'];?>" alt=""></div></a>
                       </td>
                       <td class="cart_description col-sm-4">
                         <h5><a href=""><?=$row['itemname'];?></a></h5>

                       </td>
                       <td class="cart_price col-sm-2">
                         <?php
                         $mpesa=$database->getMpesa($row['phoneNo']);
                         if($mpesa != 0){
                          ?>
                         <p class="cart_total_price">Ksh <?=$mpesa['amount'];?></p>
                       <?php }?>
                       </td>
                       <td class="cart_quantity col-sm-1">
                         <div class="cart_quantity_button">
                             <a class="cart_quantity_up" href=""> 1 pc </a>
                         </div>
                       </td>
                       <td class="cart_total col-sm-2">
                         <?php
                         $mpesa=$database->getMpesa($row['phoneNo']);
                         if($mpesa != 0){
                          ?>
                         <p class="cart_total_price"> <?=$mpesa['mpesaReceiptNumber'];?></p>
                       <?php }?>
                       </td>

                     </tr>
              <?php
            }
          }
             ?>
            </tbody></table>

        </div>
        </div>
			</div>
<div class='gap'></div><div class='gap'></div><div class='gap'></div>
<div class='row'>
  <div class="col-sm-2">
    </div><!--/sign up form-->
  <div class="col-sm-8 col-sm-offset-1">
  <h3>User Reviews</h3>
  <table class="table table-condensed total-result">
    <thead>
      <tr class="cart_menu">
      							<td class="image">Username</td>
      							<td class="description">Title</td>
      							<td class="price">Review</td>
      						</tr>
    </thead>
    <tbody>
      <?php
$rows=$database->getUserRating();
if($rows != NULL){
foreach($rows as $row){
?>
      <tr>
        <td><?=$row['username'];?></td>
      <td><?=$row['title'];?></td>
      <td><?=$row['review'];?></td>
    </tr>
    <?php
  }
}
   ?>
  </tbody></table>
</div>
<div class="col-sm-2">
  </div><!--/sign up form-->
</div>


		</div>
	</section><!--/form-->


<?php include('footer.php');?>

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
  <script type="text/javascript" src="js/jquery.form.min.js"></script>
  <script type="text/javascript" src="js/uploadit.js"></script>
</body>
</html>
