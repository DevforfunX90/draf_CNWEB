<?php
// connect to database
require_once "../../config/config.php";
$msg ="";
// if upload button is pressed

    if (isset($_POST['submit'])) {
        // // the path to store the uploaded image
        $img = $_FILES['img']['name'];
        
        // basename show tail jpg or png ,...
        $target = "../../img/".basename($img);
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
            echo "successly";
            
        }
        else{
            $msg="there was a problem uploading image";
            
        }
    }



require_once "../header.php";
?>

    <form  method="post" enctype='multipart/form-data'>
    <h1>Information</h1>
    <div class="infor">
        
        <div class="position">
            <h4>Position</h4>
            <input type="text" name="position"  id="">
        </div>
        <div class="image">
            <h4 >Image</h4>
            <div >
                <span><i class="fas fa-images"></i> </span><input type="file" name="img" src="" alt="">
            </div>
        </div>
        <div class="first-name">
            <h4>First Name</h4>
            <input type="text" name="firstName" id="">
        </div>
        <div class="last-name">
            <h4>Last Name</h4>
            <input type="text" name="lastName" id="">
        </div>
        <div class="birthday">
            <h4>Birthday</h4>
            <input type="date" name="birthday" id="">
        </div>
        <div class="phone">
            <h4>Phone</h4>
            <input type="text" name="phone" id="">
        </div>
        <div class="e-mail">
            <h4>Email</h4>
            <input type="text" name="email" id="">
        </div>
        <div class="facebook">
            <h4>Facebook</h4>
            <input type="text" name="facebook" id="">
        </div>
        <div class="instagram">
            <h4>Instagram</h4>
            <input type="text" name="instagram" id="">
        </div>
        <div class="github">
            <h4>Github</h4>
            <input type="text" name="git" id="">
        </div>
        <div class="skype">
            <h4>Skype</h4>
            <input type="text" name="skype" id="">
        </div>
        <div class="address">
            <h4>Address</h4>
            <input type="text" name="address" id="">
        </div>
        
        
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Upload">
    </div>
    </form>
<?php
    require_once "../footer.php";
?>