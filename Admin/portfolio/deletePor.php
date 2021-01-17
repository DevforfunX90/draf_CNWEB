<?php
$id = $_GET['id_portfolio'];
include("../../config/config.php");
$sql = "delete from portfolio where id_portfolio ={$id}";
if(mysqli_query($db,$sql)){
    header("Location:http://localhost/test_api/admin/portfolio/viewPor.php");
}
else{
    echo"ERROR";
}
?>