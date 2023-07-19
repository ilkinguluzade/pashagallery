<?php


$host="localhost";
$dbName="pashagallery";
$dbLogin="pasha_admin";
$dbPassword="12345678";


try{
    $db=new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",$dbLogin,$dbPassword);
    
}
catch (PDOException $e){
    echo $e->getMessage();
}

?>