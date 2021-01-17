<?php 
    require("../../config/config.php");
    if(isset($_GET['id_controuce'])){
        $id = $_GET['id_controuce'];
        $sql_1 =  "SELECT * from introduce where id_controuce = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtSubmit'])){
            $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $content = $_POST['txtContent'];
            $note = $_POST['txtnote'];
            $sql = "UPDATE introduce SET content='$content',note='$note' WHERE id_controuce ='$id' "; // ccàn thay câu lệnh này vào các bài khác

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/introduce/viewIntro.php ");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
    <title>Introduce</title>
</head>

<body>
    <?php foreach($test as $item) //cái foreach này có tác dụng để in ra từng file items 1 trong file data của content
    {?>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>id_info</td>
                <!-- khi update nhớ 2 cái giá trị của input nha: name và value (name để có thể get dữ liệu bằng cái $_post còn value thì để lấy dữ liệu về) -->
                <td><input type="text" name='txtID' value="<?php echo $item['id']?>"></td> 
            </tr>
            <tr>
                <td>Content</td>
                <td><input type="text" name='txtContent' value="<?php echo $item['content']?>"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name='txtnote' value="<?php echo $item['note']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>