<?php include 'admin/connection.php';
	$id = $_GET["id"];
	$sql = "SELECT * FROM products WHERE id = '$id'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$title = $row['title'];
		$img = $row['img'];
		$desc = $row['description'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/0f6669bfbd.js"></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/csi.min.js"></script>
</head>
<body>

<!-- Header -->
		<nav class="navbar navbar-expand-md fixed-top headersetting" id="header-nav">
			<div class="container">
				<a href="index.php" class="navbar-brand" data-aos="fade-down"><img src="img/logo.png" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="collapsenavbar" data-aos="fade-down">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link text-white" id="navlink1">HOME</a>
						</li>
						<li class="nav-item">
							<a href="about.html" class="nav-link text-white" id="navlink2">ABOUT</a>
						</li>
						<li class="nav-item">
							<a href="contactUs.html" class="nav-link text-white" id="navlink3">CONTACT US</a>
						</li>
					</ul>		
				</div>
			</div>
		</nav>

<!-- Background -->

	<section class="container text-center aboutcompany">
		<div class="row frow">
			<div class="col-lg-3 col-md-3 col-sm-12 col-10 d-block m-auto">
				<hr>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-10 d-block m-auto">
				<h1 data-aos="fade-down"><?php echo $title; ?></h1>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-10 d-block m-auto">
				<hr>
			</div>
		</div>
		<div class="row srow" style="padding-bottom: 12.5%">
			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block mr-auto">
				<div data-aos="fade-right" data-aos-duration="500">
					<img src="<?php echo 'admin/'.$img; ?>">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-10 d-block m-auto" data-aos="fade-left" data-aos-duration="500">
				<p><?php echo $desc; ?></p>
			</div>
		</div>
	</section>

<!-- Footer -->
	<div data-include="footer.php"></div>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>
</html>
