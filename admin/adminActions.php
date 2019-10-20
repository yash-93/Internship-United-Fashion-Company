<?php
    include 'connection.php';
    if(isset($_POST['createItem'])){
        $title = $_POST['productTitle'];
        $desc = $_POST['productDesc'];
        if(isset($_FILES['productImg'])){
            $errors= array();
            $file_name = $_FILES['productImg']['name'];
            $file_size = $_FILES['productImg']['size'];
            $file_tmp = $_FILES['productImg']['tmp_name'];
            $file_type = $_FILES['productImg']['type'];
            $var = explode('.',$_FILES['productImg']['name']);
            $file_ext=strtolower(end($var));
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
             }else{
                print_r($errors);
             }
        }
        $sqlInsert = "INSERT INTO products (title, img, description) VALUES ('$title', '$uploadPath', '$desc')";
        if ($conn->query($sqlInsert) === TRUE) {
            header('Location: index.php');
        }
    }
    if (isset($_POST['action']) && $_POST['id']) {
        if ($_POST['action'] == 'Remove') {
            $id = $_POST['id'];
            $sql = "SELECT img FROM products WHERE id = '$id'";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $arr = explode("/",$row['img']);
                $imgName = $arr[count($arr)-1];
                if($dirHandle = opendir("img/")){
                    while(($file = readdir($dirHandle)) !== false){
                        if($file == $imgName){
                            unlink('img/'.$imgName);
                        }
                    }
                }   
            }
            $sqlDelete = "DELETE FROM products WHERE id = '$id'";
            if ($conn->query($sqlDelete) === TRUE) {
                header('Location: index.php');
            }
        }
    }
?>