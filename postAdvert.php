<?php

session_start();

    $brand= $_POST["brand"];
    $model= $_POST["model"];
    $year= $_POST["year"];
    $price= $_POST["price"];
    $miles= $_POST["miles"];


    
    $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root");
    $results = $conn->query(" INSERT INTO cars (Brand,Model,year,price,miles) VALUES ('$brand' , '$model','$year','$price','$miles'");
    

   

    


    


?>