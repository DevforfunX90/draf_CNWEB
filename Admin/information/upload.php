<?php
// connect to database
require_once "./config/config.php";
$msg ="";
// if upload button is pressed

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query =  "select * from info where id = $id";
    $infor = $db->query($query);
    $infor = $infor->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['submit'])) {
        // // the path to store the uploaded image
        $img = $_FILES['img']['name'];
        
        // basename show tail jpg or png ,...
        $target = "img/".basename($img);
        // get all submit data from the form
        
        $position = $_POST['position'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday']; 
        $phone = $_POST['phone'];
        $gmail = $_POST['email'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $git = $_POST['git'];
        $skype = $_POST['skype'];
        $address = $_POST['address'];
        
        //code sql 
        $sql ="insert info( first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, instagram, image) values ('$firstName','$lastName','$birthday','$address','$phone','$position','$gmail','$skype','$facebook','$git','$instagram','$img')";
        
        mysqli_query($db,$sql);
        $db->query($sql);
        if(move_uploaded_file($_FILES['img']['tmp_name'],$target)) {
            $msg="image upload successly";
            
        }
        else{
            $msg="there was a problem uploading image";
            
        }
    }
}



?>