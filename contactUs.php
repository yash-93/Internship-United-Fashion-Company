<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contactUs.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/csi.min.js"></script>
</head>
<body>

<!-- Header -->
	<div class="contactUs">
		<!--<div data-include="nav.php"></div>-->
		<nav class="navbar navbar-expand-md fixed-top headersetting" id="header-nav">
			<div class="container">
				<a href="index.php" class="navbar-brand"><img src="img/logo.png" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
					<!--<span class="navbar-toggler-icon"></span>-->
				</button>
				<div class="collapse navbar-collapse text-center" id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link text-white">HOME</a>
						</li>
						<li class="nav-item">
							<a href="about.php" class="nav-link text-white">ABOUT</a>
						</li>
						<li class="nav-item">
							<a href="contactUs.php" class="nav-link text-white">CONTACT US</a>
						</li>
					</ul>		
				</div>
				</div>
		</nav>

		<div class="container text-white contactSetting" id="hide" data-aos="fade-right">
			<h1>Contact Us</h1>
			<p>Get In Touch With Our Team</p>
		</div>

	</div>	

<!-- CONTACT DETAILS -->

	<section class="container text-center contactS1">
		<div class="row rowsetting">
			<div class="address col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-home fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
					<h3>Address</h3>
					<span class="text-secondary"><strong>Singapore address:</strong> 10, Anson Road International Plaza #13-13<br>Singapore 079903
						<br><strong>India office:</strong> 7, Rabindra Sarani, Room No. 504, Kolkata 7000001(West Bengal)
					</span>
				</div>
			</div>
			<div class=" businesshours col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-clock fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
				<h3>Business Hours</h3>
					<span class="text-secondary"><strong>Monday-Friday:</strong> 8am – 9pm<br>
						<strong>Saturday:</strong> 9am – 5pm<br>
						<strong>Sunday:</strong> Close
					</span>
				</div>
			</div>
			<div class="phone col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-phone fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
					<h3>Phone</h3>
					<span class="text-secondary"><strong>Cooperative Office:</strong> +91 8981618466<br>
						<Strong>Customer Support:</strong> +91 8727084770<br>
						<strong>Sales Office:</strong> +91 8727084770
					</span>
				</div>
			</div>
			<div class="email col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-envelope fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
					<h3>Email</h3>
					<span class="text-secondary">unitedfashionco@gmail.com</span>
				</div>
			</div>
		</div>
	</section>

<!-- CONTACT FORM -->
	
	<section class="contactform bg-light">
		<form>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Your Name(Required)</label>
		    <input type="text" class="form-control" id="formGroupNameInput" maxlength="50">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Your Email(Required)</label>
		    <input type="email" class="form-control" id="formGroupEmailInput2" maxlength="50">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Subject</label>
		    <input type="text" class="form-control" id="formGroupSubjectInput2" maxlength="25">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Your Message</label>
		    <textarea class="form-control" id="formGroupMessageInput2"></textarea>
		  </div>
		   <button type="submit" class="btn text-white" >SEND</button>
		</form>
	</section>
	
<!-- Footer -->
	<div data-include="footer.php"></div>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://kit.fontawesome.com/0f6669bfbd.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>
</html>
