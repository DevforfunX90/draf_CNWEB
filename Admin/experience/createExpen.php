<?php
// connect to database
require_once "../../config/config.php";
// if upload button is pressed

    if (isset($_POST['submit'])) {
    
        $id_info = $_POST['txtid'];
        $name = $_POST['txtname'];
        $time = $_POST['txttime'];
        $desscription = $_POST['txtdesscription'];
        //code sql 
        $sql ="INSERT INTO experience (id_experience,id,name,time,desscription) VALUE ('','$id_info','$name','$time','$desscription')";
        
        //mysqli_query($db,$sql);
       // $db->query($sql);
        if(mysqli_query($db,$sql)) {
           // echo "successfully added";
           header("Location:http://localhost/test_api/admin/experience/viewExpen.php");  
        }
        else{
           echo "Error";
            
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Insert Experience</h1>
    <form  method="post" enctype='multipart/form-data'>
    <div class="infor">
        
        <div class="position">
            <h4>id_information</h4>
            <input type="text" name="txtid" value="" id="">
        </div>
        <div class="position">
            <h4>Name</h4>
            <input type="text" name="txtname" value="" id="">
        </div>
        <div class="position">
            <h4>Time</h4>
            <input type="text" name="txttime" value="" id="">
        </div>
        <div class="position">
            <h4>Desscription</h4>
            <input type="text" name="txtdesscription" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>