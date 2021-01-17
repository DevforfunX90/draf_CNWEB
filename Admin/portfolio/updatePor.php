<?php 
    require("../../config/config.php");
    if(isset($_GET['id_portfolio'])){
        $id = $_GET['id_portfolio'];
        $sql_1 =  "SELECT * from portfolio where id_portfolio = {$id}";
        $test = mysqli_query($db, $sql_1);

        if(isset($_POST['submit'])){
            // $id_info = $_POST['txtID']; //cái này cần thay đổi theo nhu cầu va mothod $_post['name'] (name là ở dưới html nha trong cái input ấy nó là 1 mothod của input)
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            $link=$_POST['link'];
            $sql = "UPDATE portfolio SET name='$name',description='$description',image='$image',link='$link' WHERE id_portfolio ='$id' "; 

            if(mysqli_query ($db, $sql)){
                // echo "Inserted successfully ^^";
                header("Location: http://localhost/test_api/admin/portfolio/viewPor.php");   
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
                <td><input type="text" name='name' value="<?php echo $item['name']?>"></td>
            </tr>
            <tr>
                <td>Desscription</td>
                <td><input type="text" name='description' value="<?php echo $item['description']?>"></td>
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
                <td><input type="submit" value='submit' name='submit'></td>
            </tr>
        </table>

    </form>
    <?php } ?> 
</body>

</html>