<?php

session_start();

if (!isset($_SESSION["gatekeeper"])){
    echo "You are not logged in please <a href='../logIn.html'> log in </a>";
}
else{

    $conn = new PDO ("mysql:host=localhost;dbname=cars;", "root" , '123456');
    $conns = new PDO ("mysql:host=localhost;dbname=users;", "root" , '123456');

    $bookTime = $_POST["booking"];
    $carID = $_POST["userID"];
    $date = $_POST["date"];
    $session = $_SESSION["gatekeeper"];
    $sessions = $conns->query("select ID from users where email = '$session'  ");
    $user = $sessions->fetch();
    $userID = $user["ID"];

    $results = $conn->query("SELECT ts.car_ID, ts.date,ts.time, ts.ID, cr.Brand , cr.Model FROM testdrive ts INNER JOIN cars cr ON ts.car_ID = cr.ID");
    //$row=$results->fetch();
    while($row = $results->fetch())
        {
            echo"<p>";
            echo "Current Bookings For: " .$row["Brand"]." ".$row["Model"]. "<br/>";
            echo " Time " .$row["time"]. "<br/>" ; 
            echo " Date " .$row["date"]. "<br/>" ; 
            echo "</p>";
        }


    if ($date == $row["date"] && $bookTime == $row["time"]) {
     echo "Slot Taken Please Select Different Time on the Date";
    }
    else {

        $add = $conn->query("INSERT INTO testdrive (user_ID, time, date, car_ID) VALUES ('$userID','$bookTime','$date','$carID'  ) ");

        echo "Succesfully Booked";
    }



}
?>