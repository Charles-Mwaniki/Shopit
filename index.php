<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Shopit</title>
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
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>

						<div class="carousel-inner col-div">
							<div class="item active">
								<div class="col-sm-6 txt">
                  <h3>Classy, bold and elegant African.</h3>
                  <p>Over 2000 of your favorite brands and new season styles launching soon. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/m1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6 txt">
								  <h3>Classy, bold and elegant African.</h3>
									<p>Browse through our wide range of African-inspired women's clothing and accessories. . </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/m2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6 txt">
                  <h3>Classy, bold and elegant African.</h3>
                      <p> Browse our collection of trendy African Print dresses, skirts, tops, headwraps and more in vibrant colours and prints. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/m4.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

                            					<div class="item">
								<div class="col-sm-6 txt">
                  <h3>Classy, bold and elegant African.</h3>
                      <p> Browse our collection of trendy African Print dresses, skirts, tops, headwraps and more in vibrant colours and prints. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/m5.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

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
							<img src="images/banner4.png" alt="" />
						</div><!--/shipping-->
<div class="row-gap"></div>
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Items</h2>
            <?php
            $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  $rows=$database->getAllItems(9);
  if($rows != NULL){
  foreach($rows as $row){
  ?>
					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
                      <div class="img">
                        <a href="product.php?q=<?=$row['itemId'];?>">
                      <img src="<?=$row['m_url'];?>" alt="" /></a></div>
                      <h2><span>KSh.</span><?=$row['price'];?></h2>
                      <p><?=$row['itemname'];?></p>
<a href="product.php?q=<?=$row['itemId'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
</div>
<div class="choose text-center">
<form class="form-item" method="post" action="process.php">
<input type="hidden" name="itemid" value="<?=$row['itemId'];?>" />
<input type="hidden" name="Id" value="<?=$session->Id;?>" />
<input type="hidden" name="amount" value="<?=$row['price'];?>" />
<input type="hidden" name="wishlist" value="add" />
<button type="submit" id="button" class="btn btn-secondary btn-sm ">Add to Wishlist</button>
</form>

						</div>
							</div>
						</div>

            <?php
          }
}
           ?>
					</div><!--features_items-->

<div class="row-gap"></div>
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
                  <?php
                  $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $rows=$database->getAllItems(3);
          if($rows != NULL){
        foreach($rows as $row){
        ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                          <div class="img">
													<img src="<?=$row['m_url'];?>" alt="" /></div>
													<h2><span>KSh.</span><?=$row['price'];?></h2>
													<p><?=$row['itemname'];?></p>

                          <a href="product.php?q=<?=$row['itemId'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

												</div>

											</div>
										</div>
									</div>
                  <?php
                }
              }

                 ?>
              	</div>
								<div class="item">
                  <?php
                  $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $rows=$database->getAllItems(3);
          if($rows != NULL){
        foreach($rows as $row){
        ?>

        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <div class="img">
                <img src="<?=$row['s_url'];?>" alt="" /></div>
                <h2><span>KSh.</span><?=$row['price'];?></h2>
                <p><?=$row['itemname'];?></p>
                <a href="product.php?q=<?=$row['itemId'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>

            </div>
          </div>
        </div>
                  <?php
                }
}
                 ?>	</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->

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
