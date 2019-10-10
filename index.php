<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ufc_test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://kit.fontawesome.com/0f6669bfbd.js"></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/csi.min.js"></script>
</head>
<body>

	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      	<div class="modal-header">
        	<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button>
      	</div>
      	<div class="modal-body">
        	<div class="container-fluid">
		    	<form>
				  <div class="form-group">
				    <label for="formGroupExampleInput">Username or Email</label>
				    <input type="text" class="form-control" id="formGroupNameInput" maxlength="50">
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">Password</label>
				    <input type="email" class="form-control" id="formGroupEmailInput2" maxlength="50">
				  </div>
				   <button type="submit" class="btn btn-warning text-white ml-auto">LOG IN</button>
				</form>
  			</div>
     	</div>
	     <div class="modal-footer">
	       	<label>Forgot password?</label>
	     </div>
    </div>
  </div>
</div>



<!-- NAVBAR -->
	<div class="bgimg">
		
		<nav class="navbar navbar-expand-md fixed-top headersetting" id="header-nav">
			<div class="container">
				<a href="index.php" class="navbar-brand" data-aos="fade-down-right" data-aos-duration="1000"><img src="img/logo.png" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="collapsenavbar" >
					<ul class="navbar-nav ml-auto" data-aos="fade-down-left" data-aos-duration="1000">
						<li class="nav-item">
							<a href="index.php" class="nav-link text-white" >HOME</a>
						</li>
						<li class="nav-item">
							<a href="about.html" class="nav-link text-white" >ABOUT</a>
						</li>
						<li class="nav-item">
							<a href="contactUs.html" class="nav-link text-white" >CONTACT US</a>
						</li>
						<li class="nav-item">
							<a href="#!" data-toggle="modal" data-target="#exampleModal" class="nav-link text-white" ></a>
						</li>
					</ul>		
				</div>
			</div>
		</nav>

		<div class="container text-center headerset text-white">
			<h2 data-aos="zoom-in" data-aos-duration="1000">The finest range of customized handbags</h2>
			<h1 data-aos="zoom-in" data-aos-duration="1000">United Fashion Company is a startup based in Kolkata and having a regional office in Singapore. We are 
			leading manufacturers and exporters of small leather goods. We customize leather wallets, belts, bags, 
			shoes based on customer demands. We are looking to expand our business in India and European countries.</h1>
			<button onclick="window.location.href='contactUs.html'" class="btn btn-outline-light btn-lg text-white" data-aos="fade-up" data-aos-duration="1000">LEARN</button>
		</div>
	</div>
	
<!-- CUSTOM RANGE -->
	

	<section class="container text-center customrange">
		<hr><hr>
		<h1 data-aos="fade-down">Custom Range of Wholesale Bags</h1>
		<hr><hr>

		<p data-aos="flip-down" data-aos-duration="1500">
			United Fashion Company is a startup based in Kolkata and having a regional office in Singapore. We are 
			leading manufacturers and exporters of small leather goods. We customize leather wallets, belts, bags, 
			shoes based on customer demands. We are looking to expand our business in India and European countries.
		</p>

		<div class="row rowsetting">
			<?php
				for ($i=0; $i < 4; $i++) { 
					echo 	"<div class=\"col-lg-3 col-md-3 col-sm-3 d-block m-auto\" data-aos=\"zoom-in-down\" data-aos-duration=\"1000\">
								<div class=\"imgsetting d-block m-auto bg-white\">
									<i class=\"far fa-clock fa-lg\"></i>
								</div>
								<h2> Professional Design </h2>
								<p> 8 masters with 30+ years experience </p>
							</div>";
				}
			?>
				<!--<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
					<div class="imgsetting d-block m-auto bg-white">
						<i class="far fa-clock fa-lg"></i>
					</div>
					<h2> Professional Design </h2>
					<p> 8 masters with 30+ years experience </p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
					<div class="imgsetting d-block m-auto bg-white">
						<i class="far fa-gem fa-lg"></i>
					</div>
					<h2> High Quality </h2>
					<p> Delivery products(bags, handbags etc.) pass rate: 98% or more </p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
					<div class="imgsetting d-block m-auto bg-white">
						<i class="fas fa-shipping-fast fa-lg"></i>
					</div>
					<h2> Fast Delivery </h2>
					<p> Timely rate of sales delivery: 98% or more </p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
					<div class="imgsetting d-block m-auto bg-white">
						<i class="fas fa-compress fa-lg"></i>
					</div>
					<h2> Small Order Acceptable </h2>
					<p> Small order is accepted, we treat every order well </p>
				</div>-->

		</div>

		<!--<div class="row rowsetting">
			<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
				<div class="imgsetting d-block m-auto bg-white">
					<i class="fas fa-users fa-lg"></i>
				</div>
				<h2> Wonderful Team </h2>
				<p> Professional sales team to offer fast response and good service </p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
				<div class="imgsetting d-block m-auto bg-white">
					<i class="far fa-thumbs-up fa-lg"></i>
				</div>
				<h2> OEM Acceptable </h2>
				<p> 4 years OEM experience for 50 clients from US and Europe </p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
				<div class="imgsetting d-block m-auto bg-white">
					<i class="far fa-clock fa-lg"></i>
				</div>
				<h2> Abundant Products </h2>
				<p> Full product lines of bags items </p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 d-block m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
				<div class="imgsetting d-block m-auto bg-white">
					<i class="far fa-gem fa-lg"></i>
				</div>
				<h2> High Customer Satisfaction </h2>
				<p> Customer satisfaction is 95%, increasing by 0.5% per year </p>
			</div>
		</div>-->

	</section>

<!-- PRODUCTS -->
	
	<section class="bg-light products">
		<div class="container text-center">
			<hr><hr>
			<h1 data-aos="fade-down">PRODUCTS</h1>
			<hr><hr>

			<div class="row">
				<?php
					$sql = "SELECT * FROM products";

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<div class=\"col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto\" data-aos=\"flip-left\" data-aos-duration=\"1000\">
									<div class=\"card\" >
									<img src=\" " . $row["img"] . " \" style=\"height: 40vh\">
									<div class=\"card-body\">
										<h2> " . $row["title"] . "</h2>
									</div>
									</div>
								</div>";
						}
					}					
				?>	
			</div>
		</div>
	</section>

<!-- CAROUSEL -->

	<section>
		<div class="slider">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="https://isundei.com/wp-content/uploads/2018/02/customized-4.jpg" alt="First slide">
			      <!--<div class="carousel-caption d-none d-md-block">
				    <h5>Make backpacks fashionable: SUNDEI Casual Backpack</h5>
				    <p>We take small orders. Three days to provide a sample. Twenty-day shipping!</p>
				  </div>-->
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://isundei.com/wp-content/uploads/2018/02/backpack.jpg" alt="Second slide">
			      <!--<div class="carousel-caption d-none d-md-block">
				    <h5>Free to explore, free to fly, free to sail, free to play: the Sundei Solar Portable Charger</h5>
				    <p>We take small orders. Three days to provide a sample. Twenty-day shipping.</p>
				  </div>-->
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://isundei.com/wp-content/uploads/2018/02/solarportable-1.jpg" alt="Third slide">
			      <!--<div class="carousel-caption d-none d-md-block">
				    <h5>We don't copy, we do high end customization -- Ming Ruixin private customization</h5>
				    <p>Find what you love and we take care of the rest.</p>
				  </div>-->
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://isundei.com/wp-content/uploads/2018/02/customized-1.jpg" alt="Fourth slide">
			      <!--<div class="carousel-caption d-none d-md-block">
				    <h5>A backpack to charge the world: SUNDEI SOlar Backpack</h5>
				    <p>We take small orders. Three days to provide a sample. Twenty-day shipping.</p>
				  </div>-->
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</section>

<!-- HOT SELLING PRODUCTS -->
	
	<section class="bg-light hotsellingproducts">
		<div class="container text-center">
			<hr><hr>
			<h1 data-aos="fade-down">HOT SELLING PRODUCTS</h1>
			<hr><hr>

			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="1000">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/04/2-4-177x142.jpg">
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="1300">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/04/bluenavy-177x142.jpg">
					</div>	
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="1600">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/03/display-1-177x142.jpg">
					</div>	
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="1900">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/02/003-5-177x142.jpg">
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="2100">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/02/002-6-177x142.jpg">
					</div>	
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 col-10 d-block m-auto" data-aos="flip-left" data-aos-duration="2300">
					<div class="card">
						<img src="https://isundei.com/wp-content/uploads/2018/02/001-5-177x142.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- FORM -->
	
	<section class="contactform">
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
		    <label for="formGroupExampleInput2">Your Message</label>
		    <input type="textfield" class="form-control" id="formGroupMessageInput2" maxlength="150">
		  </div>
		   <button type="submit" class="btn btn-warning text-white">SEND</button>
		</form>
	</section>

<!-- FOOTER -->

	<div data-include="footer.html"></div>

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>
</html>
