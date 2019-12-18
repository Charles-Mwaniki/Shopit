

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
<link rel="stylesheet" href="css/font-awesome.css">
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

/* Requested Username error checking */
$req_user = trim($session->username);
if(!$req_user || strlen($req_user) == 0 ||
!$database->usernameTaken($req_user)){
//die("Username not registered");
header('location: login.php');
exit;
}

if($session->isAdmin()){
header('location: admin.php');
exit;
}

?>
<section>
<div class="container" style="width:80% !important;">
  <div class="row">
  <h1>Welcome <span  style="color:#FE980F;"><?=$session->username;?></span></h1>

<div class='col-md-6'>

  <div class="col-sm-12">
    <div class="login-form"><!--login form-->
      <h3>User Orders</h3>
      <table class="table table-condensed total-result">

        <tbody>
          <?php
    $rows=$database->getuserOrder($session->Id);
    if($rows != NULL){
    foreach($rows as $row){
    ?>
    <tr class="tbody text-center">
      <td class="cart_description col-sm-1">
        <h5><a href=""><?=$row['username'];?></a></h5>
      </td>
                 <td class="cart_product col-sm-3">
                     <a href="product.php?q=<?=$row['itemId'];?>"><div class="img"><img src="<?=$row['m_url'];?>" alt=""></div></a>
                 </td>
                 <td class="cart_description col-sm-4">
                   <h5><a href=""><?=$row['itemname'];?></a></h5>

                 </td>
                 <td class="cart_price col-sm-2">
                   <p class="cart_total_price">Ksh <?=$row['amount'];?></p>
                 </td>
                 <td class="cart_quantity col-sm-1">
                   <div class="cart_quantity_button">
                       <p><?=$row['quantity'];?> Pcs </p>
                   </div>
                 </td>
                 <td class="cart_total col-sm-2 m">
                   <p class="cart_total_price"> <?=$row['mpesaReceiptNumber'];?></p>
                 </td>

               </tr>
        <?php
      }
    }else{echo $rows."nothing";}
       ?>
      </tbody></table>

  </div>
  </div>

</div>

<div class="col-md-6">
<div class="col-sm-12">
<div class="col-sm-12">
<h3>Write a Review</h3>
<div class="row">
    <form action="process.php" method="POST">
<div class="col-md-11">
<div class="form-group">
<label>Review Title</label>
<input class="form-control" type="text" name="title"/>
</div>
<div class="form-group">
<label>Review Text</label>
<textarea class="form-control" rows="6" name="review"></textarea>
</div>
<input type="hidden" value="rating" name="rating"/>
<input class="btn btn-primary" type="submit" value="Leave a Review"/>
</div>


    </form>
</div>
</div>
</div></div>
</div>
</div>
<div class="row-gap"></div>
</section>
<?php include('footer.php'); ?>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript" src="js/uploadit.js"></script>

</body>
