<?php 

   $selectChoice= $_GET["choice"];
   $searchInput = $_GET["search"];

   $brand= $_GET["brands"];
   $model= $_GET["models"];
   $year= $_GET["years"];
   $price= $_GET["prices"];
   $miles= $_GET["miless"];

   $first = true; // is this the first search term we've found?
    $sql = "SELECT * FROM cars WHERE ";
if($brand!="")
{
    $sql .= "Brand='$brand' ";
    $first = false;
}

if($model!="")
{
    if($first==false)
    {
        $sql .= " AND ";
    }
    $sql .= "Model='$model' ";
    $first = false;
}

if($year!="")
{
    if($first==false)
    {
        $sql .= " AND ";
    }
    $sql .= "year = '$year' ";
    $first = false;
}

if($price!="")
{
    if($first==false)
    {
        $sql .= " AND ";
    }
    $sql .= "price = '$price' ";
    $first = false;
}

if($miles!="")
{
    if($first==false)
    {
        $sql .= " AND ";
    }
    $sql .= "miles = '$miles' ";
    $first = false;
}

if($first == true)
{
    echo "you didn't enter anything";
}
else
{

   




$result = $conn->query($sql);


while($row=$results->fetch())
{
    echo "<p>";
    echo " artist ". $row["artist"] ."<br/> ";
    echo " title" . $row["title"] . "<br/> " ; 
    echo " year " .$row["year"]. "<br/>" ; 
    echo "</p>";
}
}
    // OLD ADVAN SEARCH


   $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root" , '123456');
    

        
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