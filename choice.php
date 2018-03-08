<?php 

   $selectChoice= $_GET["choice"];
   $searchInput = $_GET["search"];

   
   
   $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root");
    

        
    $results = $conn->query("select * from cars where  $selectChoice =  '$searchInput' ");

    
    
    while($row=$results->fetch())
    {
        echo "<p>";
        echo " ID ". $row["ID"] ."<br/> ";
         echo " Brand " .$row["Brand"]. "<br/>" ; 
        echo " Model " . $row["Model"] . "<br/> " ;  
        echo " Price " . $row["price"] . "<br/> " ;  
        echo " Year " .$row["year"]. "<br/>" ; 
        echo " Miles " . $row["miles"] . "<br/> " ;  
        echo "</p>";
    }  
    








?>