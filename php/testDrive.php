<?php

session_start();

if (!isset($_SESSION["gatekeeper"])){
    echo "You are not logged in please <a href='../logIn.html'> log in </a>";
}
else{


$id = $_GET["ID"];


echo "<form method='post' action='testDrive2.php' >";
echo " Book Time  <input type='time' name='booking'/>";
echo " Enter Date  <input type='date' name='date'/>";
echo "<input type='hidden' name='userID'  value='$id' /> ";
echo "<input type='submit' value='Book Now' />";
echo "</form>";






}
?>
