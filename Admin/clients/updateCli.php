<?php 
    require("../../config/config.php");
    if(isset($_GET['id_clients'])){
        $id = $_GET['id_clients'];
        $sql_1 =  "SELECT * from clients where id_clients = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['txtSubmit'])){
            $id_info = $_POST['id'];
            $image = $_POST['image'];
            $link = $_POST['link'];
            $note = $_POST['note'];
            $sql = "UPDATE clients SET id='$id_info', image='$image', link='$link',note='$note' WHERE id_clients ='$id' "; 

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/clients/viewCli.php");   //cai này là link sau khi cái if = true thì nó sẽ chạy về viewDoing
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
                <td>id_information</td>
                <td><input type="text" name='id' value="<?php echo $item['id']?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name='image' value="<?php echo $item['image']?>"></td>
            </tr>
            <tr>
                <td>Link</td>
                <td><input type="text" name='link' value="<?php echo $item['link']?>"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name='note' value="<?php echo $item['note']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value='Submit' name='txtSubmit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>