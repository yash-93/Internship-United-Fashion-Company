<?php
    include 'connection.php';
    if(isset($_POST['updateItem']) && $_GET['id']){
        $id = $_GET['id'];
        $title = $_POST['updateProductTitle'];
        $desc = $_POST['updateProductDesc'];
        if(isset($_FILES['updateProductImg'])){
            $errors= array();
            $file_name = $_FILES['updateProductImg']['name'];
            $file_size = $_FILES['updateProductImg']['size'];
            $file_tmp = $_FILES['updateProductImg']['tmp_name'];
            $file_type = $_FILES['updateProductImg']['type'];
            $var = explode('.',$_FILES['updateProductImg']['name']);
            $file_ext = strtolower(end($var));
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
             }else{
                print_r($errors);
             }
        }

        $sqlUpdate = "UPDATE products SET img = '$uploadPathProduct', title = '$title', description = '$desc' WHERE id = '$id'";
        if ($conn->query($sqlUpdate) === TRUE) {
            header('Location: index.php');
        }
    }
?>