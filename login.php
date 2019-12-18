

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Login | Shopit</title>
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
<?php include('header.php'); ?>
	<section id="form"><!--form-->
		<div class="container">
      <div class="row">

<div class="col-sm-4 col-sm-offset-4">
  <?php
  if(isset($_SESSION['regsuccess'])){

   ?>
<div class="alert alert-success">
<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
</button>
<p class="text-small">Welcome <?= $_SESSION['reguname'];?>, your registration is ok. </p>
</div>
<?php
} ?>
</div>

      </div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
            <form action="process.php" method="POST">
    <input class="form-control" placeholder='Username' name="username" type='text' required autocomplete="off">
    <input class="form-control"  placeholder='Password' name="passwd" type='password' required autocomplete="off">
    <input class="form-control"  type="hidden" name="sublogin" value="1">
    	<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
        <div class="col-sm-1">
  					<h2 class="or">OR</h2>
  				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
         <form action="process.php" method="POST">
              <input class="form-control"  type="text" required autocomplete="off" name="fname" placeholder="First Name"maxlength="10" />
              <input class="form-control"  type="text" required autocomplete="off" name="lname" placeholder="Last Name"maxlength="10" />
          <input class="form-control"  type="text" required autocomplete="off" name="uname" placeholder="Username"maxlength="10" />
            <input class="form-control"  type="email" required autocomplete="off" name="email" placeholder="E-mail"maxlength="20" />
              <input class="form-control"  type="number" required autocomplete="off" name="phoneNo" placeholder="Phone Number (254******)" maxlength="10" />
            <input class="form-control"  type="password"required autocomplete="off" name="pass" class="pass" placeholder="Password"maxlength="10" />
        <input type="hidden" name="subjoin" value="1">
          <button type="submit" class="btn btn-default"/>Sign Up</button>
          </form>
					</div><!--/sign up form-->
				</div>
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
    <script src="js/jquery-1.10.2.min.js"></script>
     <script src="js/jquery.form.min.js"></script>
    <script src="js/uploadit.js"></script>
</body>
</html>
