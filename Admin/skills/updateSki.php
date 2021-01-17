<?php 
    require("../../config/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 =  "SELECT * from skills where id_skills = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtSubmit'])){
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $id_1 = $_POST['txtid'];
            $name = $_POST['txtname'];
            $percentage = $_POST['txtpercentage'];
            $sql = "UPDATE skills SET name='$name', percentage='$percentage' WHERE id_skills ='$id' "; 

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/skills/viewSki.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
                // echo "$img";
            }
            else{
                echo "Error!";
            }
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php foreach ($test as $item) {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name='txtname' value="<?php echo $item['name']?>"></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><input type="text" name='txtpercentage' value="<?php echo $item['percentage']?>"></td>
            </tr>
            
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>