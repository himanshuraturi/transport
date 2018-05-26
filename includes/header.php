<?php
?><div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php">Transporters</a></h1>
					</div>
					<div class="top-nav-text">
						<div class="nav-contact-w3ls"><i class="fa fa-phone" aria-hidden="true"></i><p>+91 9999999999</p></div> 
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center active" href="index.php">Home</a></li>
							<li><a href="services.php" class="hvr-underline-from-center">Services</a></li>
							<li><a href="contact.php" class="hvr-underline-from-center">Contact</a>
							<div class="w3layouts_header_left">
					<?php 
					if(!isset($_SESSION['cid']))
					{ ?>
					<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-user" aria-hidden="true"></i>Sign Up</a></li>
					<?php } 
					 else
					{ ?>
					<li><a href="load.php"><i class="hvr-underline-from-center" aria-hidden="true"></i>My Bookings</a></li>
					<li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>		
					<?php } ?>
			
						

					</div>

					<div class="clearfix"> </div>	
				</nav>
	
	</div>