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
        $sqlInsert = "INSERT INTO products (title, img) VALUES ('$title', '$img')";
        if ($conn->query($sqlInsert) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['action']) && $_POST['id']) {
        if ($_POST['action'] == 'Remove') {
            $id = $_POST['id'];
            $sqlDelete = "DELETE FROM products WHERE id = '$id'";
            if ($conn->query($sqlDelete) === TRUE) {
                header('Location: index.php');
            } else {
                echo "Error: " . $sqlDelete . "<br>" . $conn->error;
            }
        }
    }

    if(isset($_POST['updateItem']) && $_GET['id']){
        $id = $_GET['id'];
        $title = $_POST['updateProductTitle'];
        $img = $_POST['updateProductImg'];
        $sqlUpdate = "UPDATE products SET img = '$img', title = '$title' WHERE id = '$id'";
        if ($conn->query($sqlUpdate) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
        }
    }
    
?>