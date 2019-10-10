<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ufc_test";
    $message = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['submit'])){
        $user = $_POST['adminUsername'];
        $pass = $_POST['adminPass'];
        $result = mysqli_query($conn,"SELECT * FROM admins WHERE username='" . $_POST["adminUsername"] . "' and password = '". $_POST["adminPass"]."'");
        $count  = mysqli_num_rows($result);
        if($count == 1){
            echo "Logged IN";
            $_SESSION['user'] = $user;
            header('Location: adminPanel.php');
        }else{
            echo "Invalid Username of Password";
            header('Location: index.php');
        }
    }

?>