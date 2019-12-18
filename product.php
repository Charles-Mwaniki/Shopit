<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
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
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Mens
                    </a>
                  </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">T-shirts</a></li>
                    <li><a href="#">Khaki pants</a></li>
                    </ul>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Children
                      </a>
                    </h4>
                  </div>
                  <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">Shoes </a></li>
                        <li><a href="#">Socks </a></li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Womens
                    </a>
                  </h4>
                </div>
                <div id="womens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Kitenge dress</a></li>
                      <li><a href="#">Skirts</a></li>
                    </ul>
                  </div>
                </div>
              </div>


            </div><!--/category-products-->


            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->
<div class="row-gap"></div>
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->

          </div>
      	</div>

				<div class="col-sm-9 padding-right">

          <?php
          $id=$_GET['q'];
              $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rows=$database->getItemInfo($id);
if($rows != NULL){
foreach($rows as $row){
           ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=$row['m_url'];?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$row['itemname'];?></h2>


									<h4>Ksh.<?=$row['price'];?></h4>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> Shopit</p>
                <span>
                    <form class="form-item" method="post" action="process.php">
                <label>Quantity:</label>
                <input type="number" class="qty"name="qty" value="1"placeholder=""  />
                  <p><?=$row['instock'];?> remaining</p>

                <input type="hidden" name="itemid" value="<?=$row['itemId'];?>" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="product_qty" value=1 />
                <input type="hidden" name="returnUrl" value="<?=$current_url;?>" />
                <button type="submit" id="button" class="btn btn-primary btn-sm ">Add to Cart</button>
                </form>
                <style>
                .btn.btn-primary, .product-information span {
                margin-top: 5px !important;
                }
              .col-md-5 .list, .icon-group {
    background: #ffff !important;}
    .qty{width:70px !important;}
                </style>
                </span>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-8">

												<p><?=$row['description'];?></p>

								</div>
							</div>

              <?php
        $rows=$database->getUserRating();
        if($rows != NULL){
        foreach($rows as $row){
        ?>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i><?=$row['username'];?></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p><?=$row['review'];?></p>
									<p><b>Write Your Review</b></p>
                  <?php
                }
              }
                 ?>
                  <div class="row">
                      <form action="process.php" method="POST">
                  <div class="col-md-7">
                  <div class="form-group">
                  <label>Review Title</label>
                  <input class="form-control" type="text" name="title"/>
                  </div>
                  <div class="form-group">
                  <label>Review Text</label>
                  <textarea class="form-control" rows="6" name="review"></textarea>
                  </div>
                  </div>
                  <div class="col-md-5">
                  <ul class="list booking-item-raiting-summary-list stats-list-select">
                  <li>
                  <div class="booking-item-raiting-list-title">Product quality</div>
                  <ul class="icon-group booking-item-rating-stars">
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  </ul>
                  </li>
                  <li>
                  <div class="booking-item-raiting-list-title">Order Shipping and delivery</div>
                  <ul class="icon-group booking-item-rating-stars">
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  </ul>
                  </li>
                  <li>
                  <div class="booking-item-raiting-list-title">After-Sale Services</div>
                  <ul class="icon-group booking-item-rating-stars">
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  </ul>
                  </li>
                  <li>
                  <div class="booking-item-raiting-list-title">Customer Care Response</div>
                  <ul class="icon-group booking-item-rating-stars">
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  <li><i class="fa fa-smile-o"></i>
                  </li>
                  </ul>
                  </li>

                  </ul>
                  <input type="hidden" value="rating" name="rating"/>
                  <input class="btn btn-primary" type="submit" value="Leave a Review"/>
                  </div>
                      </form>
                  </div>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->

        <?php }
      }
        ?>

				</div>
			</div>
		</div>
	</section>

  <?php include('footer.php'); ?>


      <script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.scrollUp.min.js"></script>
  	<script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
</body>
</html>
