<?php 
    require("../../config/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_1 =  "SELECT * from defect where id_defect = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtsubmit'])){
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $content = $_POST['txtcontent'];
            $id_info=$_POST['txtid'];
            $sql = " UPDATE defect SET id='$id_info', content='$content' WHERE id_defect ='$id' "; 

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/defect/viewDe.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
                <td>ID_Infomation</td>
                <td><input type="text" name='txtid' value="<?php echo $item['id']?>"></td>
            </tr>

            <tr>
                <td>Content</td>
                <td><input type="text" name='txtcontent' value="<?php echo $item['content']?>"></td>
            </tr>
            
            <tr>
                <td><input type="submit" value='Submit' name='txtsubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>