<?php include('admin/session.php');?>
<header id="header"><!--header-->
  <div class="header-middle"><!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-md-4 clearfix">
          <div class="logo pull-left">
            <a href="index.php"><img src="images/logo.png" alt="" /></a>
          </div>

        </div>
        <div class="col-md-8 clearfix">
          <div class="shop-menu clearfix pull-right">
            <ul class="nav navbar-nav">
              <li><a href="user.php"><i class="fa fa-user"></i> Account</a></li>
              <li><a href="wishlist.php"><i class="fa fa-star"></i> Wishlist</a></li>
             
              <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span class="product_qun">
                <?php
                if(isset($_SESSION["cartproducts"]) && count($_SESSION["cartproducts"]) !=0){
          echo count($_SESSION["cartproducts"])."";
        }else{
        echo  "0";
      }?>
              </span> Cart</a></li>
                 <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
<?php
          if($session->logged_in){
            if($session->isAdmin()){
                echo "<li><a href=\"admin.php\"><i class=\"fa fa-lock\"></i> $session->username</a></li>";
            }else{
                echo "<li><a href=\"user.php\"><i class=\"fa fa-lock\"></i> $session->username</a></li>";
            }
          echo "<li><a href=\"process.php\"><i class=\"fa fa-sign-out\"></i> Log Out</a></li>";
          }
          else{
           echo "<li><a href=\"login.php\"><i class=\"fa fa-lock\"></i> Login</a></li>";
          }
          ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-middle-->

  <div class="header-bottom"><!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

        </div>
        <div class="col-sm-3">
        
        </div>
      </div>
    </div>
  </div><!--/header-bottom-->
</header><!--/header-->
