<?php
SESSION_START();
include 'conn.php';
if (!isset($_SESSION['username']))
{

}
else {
	$UNAME = ($_SESSION['username']);
	
	
	$query = "SELECT * FROM admin where username ='$UNAME'";
	$result = mysqli_query($link,$query);
	$count = mysqli_num_rows($result);

	if ($count != 0)
	{
		header('location: admin/home.php');
	}
	
	else {
	$query1 = "SELECT * FROM administrator where username='$UNAME'";
	$result1 = mysqli_query($link,$query1);
	$count1 = mysqli_num_rows($result1);
	if($count1 != 0)
	{
		header('location: administrator/employee.php');
	}

}
}
?>



<!DOCTYPE html>
<html> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home &mdash; www.ntrca.com</title>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<?php include 'login1.php'; ?>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						

						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="new.php">NTRCA</a></h1>
                                                   
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li  class="active"><a href="new.php">Home</a></li>
									

								<li>
									<a class="fh5co-sub-ddown">Services</a>
									 <ul class="fh5co-sub-menu">
									 	<li>
											
											<ul class="fh5co-sub-menu">
												
										
											</ul>
									 	<li>
											<a href="collection.html" class="fh5co-sub-ddown">Tax Collection</a>
											<ul class="fh5co-sub-menu">
										<li><a href="http://S.O.S.com">property</a></li>
										<li><a href="http://Tabor Secondery.com"">House</a></li>
										<li><a href="http://Panafric.com"">Trade</a></li> 
										
											</ul>
										<li>
											<a href="education.html" class="fh5co-sub-ddown">Tax Payer Education</a>
											<ul class="fh5co-sub-menu">
										<li><a href="http://aile Resort & Hotels">awerness of Tax</a></li>
										<li><a href="http://KerAwd Hotel">Tax education by expert</a></li>
						
										<li><a href="http://Central Hawassa ">Paying Tax on Time </a></li>
										
											</ul>
										</li>
										<li><a href="data.html" class="fh5co-sub-ddown">Tax Data<br> Admimstration system</a></li>
										
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="contactus.php">Contact</a></li>
								<li><a href="a/attendance1.php">Attendance</a></li>
								<li class="">
										
										<p><a class="btn btn-primary" href="sign.php">Login</a></p>
									</li>
							</ul>
							
						</nav>
					</div>
				</div>
			</header>
		</div>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/16.jpg);">
				<div class="desc animate-box">


<div class='container'>
			<h2>
				
				
				<div class="login-box">
					  <div class="login-logo">
						  <b>Login Page</b>
					  </div>
				  
					  <div class="login-box-body">
					
				
						<form  method="POST">
							  <div class="form-group has-feedback">
								<input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							  </div>
						  <div class="form-group has-feedback">
							<input type="password" class="form-control" name="password" placeholder="input Password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						  </div>
							  <div class="row">
								<div class="col-xs-4">
									  <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
								</div>
							  </div>
						</form>
					  </div>
					  <?php
						  if(isset($_SESSION['error'])){
							  echo "
								  <div class='callout callout-danger text-center mt20'>
									  <p>".$_SESSION['error']."</p> 
								  </div>
							  ";
							  unset($_SESSION['error']);
						  }
					  ?>
				</div>
					
				<?php include 'admin/includes/scripts.php' ?>
				
				
					</h2></div>
				
				</div>
			</div>

		</div>
		<br>
		<br>
		<br>

		<div id="fh5co-work">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12 work">
						<div class="row">
							<div class="col-md-6 col-md-push-6">
								<div class="half-inner half-inner2" style="background-image:url(images/5.jpg);">
								</div>
							</div>
							<div class="col-md-6 col-md-pull-6 animate-box">
								<div class="desc desc2">
									<h3><a href="#">Tax collection system</a></h3>
									<p>Tax Collection system is....</p>
									<p><a class="btn btn-primary" href="#">See More</a></p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-features">
				
						<div class="col-md-18 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-laptop"></i>
								</span>

							
			
							
						<h3>Our Aim</h3>
						<p>To collect tax for the growth of economy of our country&amp; coordinating proper utilization of natural</p>
					</div>
				</div>
			

			
		<footer>
			<footer>
			<div id="footer">
				<div class="container">
<div class="row">
						<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">

						
						</div>
						<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>Follow Us</h3>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-twitter2"></i> Twitter</a></li>
								<li><a href="#"><i class="icon-facebook2"></i> Facebook</a></li>
								<li><a href="#"><i class="icon-google-plus2"></i> Google Plus</a></li>
								<li><a href="#"><i class="icon-instagram2"></i> Instagram</a></li>
								<li><a href="#"><i class="icon-hangouts"></i> hangouts</a></li>
								<li><a href="#"><i class="icon-telegram"></i> Telegram</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="fh5co-copyright text-center">
					<p>&copy; 2019 Free NTRCA. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://swe.3rdyearstudents/" target="_blank">Haramaya University  </a></span></p>	
				</div>
			</div>
		</footer>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>


