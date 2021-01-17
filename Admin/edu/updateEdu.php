<?php 
    require("../../config/config.php");
    if(isset($_GET['id_education'])){
        $id = $_GET['id_education'];
        $sql_1 =  "SELECT * from education where id_education = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtSubmit'])){
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $name = $_POST['txtname'];
            $time = $_POST['txttime'];
            $dess = $_POST['txtdess'];
            $sql = "UPDATE education SET name='$name', time='$time',desscription='$dess' WHERE id_education ='$id' "; 

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/edu/viewEdu.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
    <?php foreach($test as $item) //cái foreach này có tác dụng để in ra từng file items 1 trong file data của content
    {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name='txtname' value="<?php echo $item['name']?>"></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="text" name='txttime' value="<?php echo $item['time']?>"></td>
            </tr>
            <tr>
                <td>Desscription</td>
                <td><input type="text" name='txtdess' value="<?php echo $item['desscription']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>