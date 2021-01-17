<?php
// connect to database
require_once "../../config/config.php";
// if upload button is pressed

    if (isset($_POST['submit'])) {
    
        $id_info = $_POST['id'];
        $name = $_POST['name'];
        $percentage = $_POST['percentage'];
        //code sql 
        $sql ="INSERT INTO skills (id_skills,id, name,percentage) VALUE ('','$id_info','$name','$percentage')";
        
       //mysqli_query($db,$sql);
       // $db->query($sql);
        if(mysqli_query($db,$sql)) {
            //echo "successfully added";
            header("Location:http://localhost/test_api/admin/skills/viewSki.php");
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
<h1>Add Skills</h1>
    <form  method="post" enctype='multipart/form-data'>
    <div class="infor">
        
        <div class="position">
            <h4>id_information</h4>
            <input type="text" name="id" value="" id="">
        </div>
        <div class="position">
            <h4>Name</h4>
            <input type="text" name="name" value="" id="">
        </div>
        <div class="position">
            <h4>Percentage</h4>
            <input type="text" name="percentage" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>