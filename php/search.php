<?php
   
   $di= $_GET["car"];
   
    
    $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root");
    
    if ($di=="") {
        
         $results = $conn->query("select * from cars");
        
        }
    else {
        
    $results = $conn->query("select * from cars where brand ='$di'");
    }
    
    
    
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