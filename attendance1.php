
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
								<li><a href="attendance1.php">Attendance</a></li>
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
						<h2> <strong> Enter Employee ID for attedance</strong></h2>
<div class= "container">


<div class="login-box">
  	<div class="login-logo">
  		<p id="date"></p>
      <p id="time" class="bold"></p>
  	</div>
  
  	<div class="login-box-body">
    	

    	<form id="attendance">
          <div class="form-group">
            <select class="form-control" name="status">
              <option value="in">Time In</option>
              <option value="out">Time Out</option>
            </select>
          </div>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control input-lg" id="employee" name="employee" required>
        		<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
		<div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
		<div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
  		
</div>
</div>			
				</div>
			</div>

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


	
<?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>


			<footer>
			<div id="footer">
				<div class="container">
<div class="row">
						<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">

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
					<p>&copy; 2019 Free NTRCA. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://swe.3rdyearstudents/" target="_blank"> </a></span></p>	
				</div>
			</div>
		</footer>
	</body>
</html>


