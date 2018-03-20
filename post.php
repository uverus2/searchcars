<?php
session_start();

echo "<link rel='stylesheet' href='css/main.css'>";




$session = $_SESSION["gatekeeper"];
// Test that the authentication session variable exists
if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Go away!";
   ;
}
else
{

    $conn = new PDO ("mysql:host=localhost;dbname=users;", "root" , '123456');
    $results = $conn->query("select first_name, surname from users where email = '$session'  ");
    $row=$results->fetch();
    echo " Welcome ".$row["first_name"]." ".$row["surname"]."" ;

    ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <div class="form-style-6">
            <h1>Enter SearchCars.com</h1>
            <form method="post" action="postAdvert.php">


                <input  type="text"   name="brand" placeholder="Enter Brand" required />
                <input  type="text"   name="model" placeholder="Enter Model" required />
                <input  type="number" name="year" placeholder="Enter Year" required />
                <input  type="number" name="price" placeholder="Enter Price" required />
                <input  type="number" name="miles" placeholder="Enter Miles" required />

            
                
                
                <input type="Submit" value="Post Advert" />

                

            </form>

            
        </div>

      


    </body>



    </html>


<?php
}

 if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]== "1")
{
    echo " <a href='index.html'> Link </a> ";
}


?>