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
        
        if(isset($_FILES['productImg'])){
            $errors= array();
            $file_name = $_FILES['productImg']['name'];
            $file_size = $_FILES['productImg']['size'];
            $file_tmp = $_FILES['productImg']['tmp_name'];
            $file_type = $_FILES['productImg']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['productImg']['name'])));
            $extensions= array("jpeg","jpg","png");
            $uploadPath = "img/".$file_name;
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
             
            if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }
            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"img/".$file_name);
                echo "Success";
             }else{
                print_r($errors);
             }
        }

        $sqlInsert = "INSERT INTO products (title, img) VALUES ('$title', '$uploadPath')";
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