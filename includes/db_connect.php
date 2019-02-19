<?php

$host="localhost";
$username="root";
$password="2123iklim4562";
$databasename="image_database";



// pdo style, it doesnt matter no ones checing anyway

try{
    $conn=new PDO("mysql:host=$host;dbname=$databasename",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";
}
catch(PDOException $error){
    echo "connection failed".$error->getMessage();
    
}
    





?>
