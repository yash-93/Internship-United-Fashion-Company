<?php
    include 'connection.php';
    if(isset($_POST['changeBanner'])){
        
        if(isset($_FILES['bannerImg'])){
            $errors= array();
            $file_name = $_FILES['bannerImg']['name'];
            $file_size = $_FILES['bannerImg']['size'];
            $file_tmp = $_FILES['bannerImg']['tmp_name'];
            $file_type = $_FILES['bannerImg']['type'];
            $file_ext = strtolower(end(explode('.',$_FILES['bannerImg']['name'])));
            $extensions = array("jpeg","jpg","png");
            $uploadPath = "img/banner/".$file_name;
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
             
            if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }
            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"img/banner/".$file_name);
                echo "Success";
             }else{
                print_r($errors);
             }
        }

        $sqlInsert = "UPDATE banner SET img = '$uploadPath'";
        if ($conn->query($sqlInsert) === TRUE) {
            header('Location: adminBanner.php');
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }
?>