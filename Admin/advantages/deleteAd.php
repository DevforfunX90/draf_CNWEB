<?php
$id = $_GET['id'];
include("../../config/config.php");
$sql = "delete from advantages where id_advantages =".$id;
if(mysqli_query($db,$sql)){
    header("Location:http://localhost/test_api/admin/advantages/viewAd.php");
}
else{
    echo"ERROR";
}
?>