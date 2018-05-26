<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>
<title>aHn Transporters</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<?php
	include 'includes/header.php';
?>

<div class="modal fade" id="myModal2">
<div class="modal-dialog">
<div class="modal-content title1">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
</div>
<div class="modal-body">
<form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>

<!-- when we click on Sign-in button-->
<!-- Text input-->
<div class="form-group">
<label class="col-md-3 control-label" for="email"></label>
<div class="col-md-6">
<input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

</div>
</div>


<!-- Password input-->
<div class="form-group">
<label class="col-md-3 control-label" for="password"></label>
<div class="col-md-6">
<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

</div>
</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
<button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->
<div class="modal fade" id="myModal3">
<div class="modal-dialog">
<div class="modal-content title1">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
</div>
<div class="modal-body">
<form class="form-horizontal" name="form" action="signup.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="name"></label>
	<div class="col-md-12">
		<input id="name" name="name" placeholder="Name" class="form-control input-md" type="text">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label title1" for="email"></label>
	<div class="col-md-12">
		<input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="password"></label>
	<div class="col-md-12">
		<input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

	</div>
</div>

<div class="form-group">
	<label class="col-md-12control-label" for="cpassword"></label>
	<div class="col-md-12">
		<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">

	</div>
</div>
<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="address" name="address" placeholder="Address" class="form-control input-md" type="text">

	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<label class="col-md-12 control-label" for="mob"></label>
	<div class="col-md-12">
		<input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">

	</div>
</div>

<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
	<label class="col-md-12 control-label" for=""></label>
	<div class="col-md-12">
	<button type="submit" class="btn btn-primary">Sign up</button>
	</div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div>
</div>
</div><!--container end-->

<div class="banner1">
</div>
<div class="w3ls_address_mail_footer_grids">
	<div class="heading">
		<h2>locate us</h2>
	</div>
	<div class="container">
		
			<div class="col-md-6 contact-form">
				<h4 class="white-w3ls">Contact <span>Form</span></h4>
				<form action="#" method="post">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="Email" required=""> 
						<label>Email</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="Subject" required="">
						<label>Subject</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="Message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
			<div class="col-md-6 contactright">
				<h3>Contact Address</h3>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>aHn Transporters, Selaqui, <span>Dehradun 248001.</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+91 9999999999 <span>+91 9000000000</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p> <span><a href="mailto:aHngeu2017@gmail.com">aHngeu2017@gmail.com</a></span></p>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div>
</div>

<?php
	include 'includes/footer.php';
?>



<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- //js-scripts -->

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->

</body>
</html>