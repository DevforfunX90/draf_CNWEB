<?php
$id = $_GET['id'];
include("../../config/config.php");
$sql = "delete from defect where id_defect =".$id;
if(mysqli_query($db,$sql)){
    header("Location:http://localhost/test_api/admin/defect/viewDe.php");
}
else{
    echo"ERROR";
}
?>