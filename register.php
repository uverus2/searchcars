<?php  

 echo " <link rel='stylesheet' type='text/css' href='theme.css'>";
    
    $a = $_GET["name"];
    $b = $_GET["pass"];
    $d = $_GET["date"];
    
    $array = explode("-",$d);
    $date = getDate();
    $dateYe = $date["year"];
    
    if ($dateYe <= 18) {
        
        echo  "not old enougth </br>";
        
    }
    else {
        
        echo "old enought </br>";
    }
    
    if ($a == "" && $b == "" && $d == ""){
        
        echo "Enter Password and Name </br> ";
        
    }
    elseif ($a == "" ) {
          echo "enter First Name </br>";
        
    }
    elseif ($b == "" ) {
          echo "enter date of birth ";
        
    }
    
    elseif ($b == "" ) {
          echo "enter password ";
        
    }
    else {
    echo "found name $a </br> ";
    echo "found  pass $b </br>";
    echo "found age $d ";
    }
    
  $conn = new PDO ("mysql:host=localhost;dbname=ephp045;", "ephp045", "eesoongo");
  $results = $conn->query("INSERT INTO users (Username,Password,Date) VALUES ('$a' , '$b' , '$d')");
  

   
?>