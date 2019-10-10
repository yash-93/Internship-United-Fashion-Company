<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ufc_test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['createItem'])){
        $title = $_POST['productTitle'];
        $img = $_POST['productImg'];
        $sql = "INSERT INTO products (title, img) VALUES ('$title', '$img')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>