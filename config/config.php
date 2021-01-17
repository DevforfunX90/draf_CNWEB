<?php
try{
    $servername = "localhost";
    $database = "cv";
    $username = "root";
    $password = "";
    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
    
    }

catch(exception $e){
    echo $e;
    exit();
}
?>