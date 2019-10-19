<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contactUs.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://kit.fontawesome.com/0f6669bfbd.js"></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/csi.min.js"></script>
</head>
<body>

<!-- Header -->
	<div class="contactUs">
		<div data-include="nav.php"></div>

		<div class="container text-white contactSetting" id="hide" data-aos="fade-right">
			<h1>Contact Us</h1>
			<p>Get In Touch With Our Team</p>
		</div>

	</div>	

<!-- CONTACT DETAILS -->

	<section class="container text-center contactS1">
		<div class="row rowsetting">
			<div class="col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-home fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
					<h3>Address</h3>
					<span class="text-secondary">Singapore address: 10, Anson Road International Plaza #13-13<br>Singapore 079903
						<br><br>India office: 7, Rabindra Sarani, Room No. 504, Kolkata 7000001(West Bengal)
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-clock fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
				<h3>Business Hours</h3>
					<span class="text-secondary">Monday-Friday: 8am – 9pm<br><br>
						Saturday: 9am – 5pm<br><br>
						Sunday: Close
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-10">
				<div class="d-block m-auto imgsetting" data-aos="flip-down" data-aos-duration="1000">
					<i class="fas fa-phone fa-3x text-white"></i>
				</div>
				<div id="margin" data-aos="fade-up" data-aos-duration="1000">
					<h3>Phone</h3>
					<span class="text-secondary">Cooperative Office: +91 8981618466<br><br>
						Customer Support: +91 8727084770<br><br>
						Sales Office: +91 8727084770
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-10">
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
		   <button type="submit" class="btn text-white">SEND</button>
		</form>
	</section>
	
<!-- Footer -->
	<div data-include="footer.php"></div>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>
</html>
