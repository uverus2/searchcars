<?php  

 
    
    $firstName = $_GET["firstName"];  // variable does not need to be the same as get name fild
    $surName = $_GET["surName"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $date = $_GET["date"];

    $array = explode("-",$date);
    $getDa = getDate();
    $dateYe = $getDa["year"];
    
    if ($firstName == "" && $surName == "" && $email == "" && $password == "" && $date == ""){

        echo "Enter the detail required </br> ";
        
    }
    elseif ($firstName == "" && $surName == "") {
          echo "Enter First Name and Second Name </br>";
        
    }
    elseif ($email == "" ) {
          echo "Enter Email ";
        
    }
    
    elseif ($password == "" ) {
          echo "Enter Password ";
        
    }
    else {
        header('Location:login.html');
    }
    
    
  $conn = new PDO ("mysql:host=localhost;dbname=users;", "root" , '123456');
  $results = $conn->query("INSERT INTO users (first_name,surname,email,password,date,admin) VALUES ('$firstName' , '$surName' , '$email','$password' ,'$date',0)");
  

   
?>