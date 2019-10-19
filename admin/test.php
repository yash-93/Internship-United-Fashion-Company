<?php
    include 'connection.php';
    if(isset($_POST['updateItem']) && $_GET['id']){
        $id = $_GET['id'];
        $title = $_POST['updateProductTitle'];

        if(isset($_FILES['updateProductImg'])){
            $errors= array();
            $file_name = $_FILES['updateProductImg']['name'];
            $file_size = $_FILES['updateProductImg']['size'];
            $file_tmp = $_FILES['updateProductImg']['tmp_name'];
            $file_type = $_FILES['updateProductImg']['type'];
            $file_ext = strtolower(end(explode('.',$_FILES['updateProductImg']['name'])));
            $extensions = array("jpeg","jpg","png");
            $uploadPathProduct = "img/".$file_name;
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

        $sqlUpdate = "UPDATE products SET img = '$uploadPathProduct', title = '$title' WHERE id = '$id'";
        if ($conn->query($sqlUpdate) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
        }
    }
?>