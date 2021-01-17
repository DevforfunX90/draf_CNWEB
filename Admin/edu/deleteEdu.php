<?php
$id = $_GET['id_education'];
include("../../config/config.php");
$sql = "delete from education where id_education =".$id;
if(mysqli_query($db,$sql)){
    header("Location:http://localhost/test_api/admin/edu/viewEdu.php");
}
else{
    echo"ERROR";
}
?>