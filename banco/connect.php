<?php


$user ="root";
$pass ="root";

try{
   $conn= new PDO('mysql:host=localhost;dbname=blog',$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo "error" .$e->getMessage();
}


?>