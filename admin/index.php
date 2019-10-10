<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: adminPanel.php');
    }

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ufc_test";
    $message = "";
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo ".";
        }
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UFC Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        <form method="POST" action="adminLoginCheck.php">
          <div class="form-group">
            <div class="form-label-group">
              <input name="adminUsername" type="text" id="adminUser" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="adminUser">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="adminPass" type="password" id="adminPass" class="form-control" placeholder="Password" required="required">
              <label for="adminPass">Password</label>
            </div>
          </div>
          <button name="submit" type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
