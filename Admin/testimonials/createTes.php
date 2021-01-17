
<?php 
    require("../../config/config.php");
    if(isset($_POST['txtSubmit'])){
        $id_info = $_POST['id'];
        $name = $_POST['name'];
        $note=$_POST['note'];

        $target_dir    = "../img/";
        $target_file   = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $maxfilesize   = 800000;
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','svg');
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        
        $sql ="INSERT INTO testimonials (id_testimonials,id,name,note,image) VALUE ('','$id_info','$name','$note','$img')";
        if(mysqli_query($db, $sql)){
            // echo "Inserted successfully ^^";
            header("Location:http://localhost/test_api/admin/testimonials/viewTes.php");   
            // echo "$img";
        }
        else{
            echo "Error!";
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
<h1>Add Testimonials</h1>
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
            <h4>Note</h4>
            <input type="text" name="note" value="" id="">
        </div>
        <div class="position">
            <h4>Image</h4>
            <input type="text" name="image" value="" id="">
        </div>
    </div>
    <div class="setting">
        <input type="submit" name="submit" value="Insert">
    </div>
    </form>
</body>
</html>