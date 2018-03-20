<?php 

session_start();



if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == 1 )
{
    $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root" , '123456');

    $results = $conn->query("select * from cars");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="removeNav">
        <ul id="menu-closed">
            <li>/<a href="index.php">home</a></li>
            <li>/<a href="login.html">log in</a></li>
            <ul>

    </nav>
    <h1 class="removes"> Remove A Car Post</h1>
    <form method="post" action="remove.php">
        <input class="remove" type="number" name="id">
        <input type="submit" class="removeSubmit remove" value="Remove">


    </form>
    
</body>
</html>

<?php 
   while($row=$results->fetch())
   {
       echo "<p> Car Details: <br/>";
       echo " ID ". $row["ID"] ."<br/> ";
       echo " Brand " .$row["Brand"]. "<br/>" ; 
       echo " Model " . $row["Model"] . "<br/> " ;  
       echo " Price " . $row["price"] . "<br/> " ;  
       echo " Year " .$row["year"]. "<br/>" ; 
       echo " Miles " . $row["miles"] . "<br/> " ;  
       echo "</p>";
   }

   $getID = $_POST["id"];
   $sql = $conn->query("DELETE FROM cars WHERE ID = '$getID'");


}
else {
    echo "Admin Only !!! Please Log In As Admin";
   
}
?>