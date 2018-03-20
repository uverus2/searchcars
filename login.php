<?php 

$usernames = $_POST["username"];
$passwords = $_POST["password"];

session_start();

$conn = new PDO ("mysql:host=localhost;dbname=users;", "root", '123456' );
$results = $conn->query
("select * from users where email = '$usernames' AND password = '$passwords'");
 
 
$loginRow=$results->fetch();

if ($loginRow != false) 
{

        $_SESSION["gatekeeper"] = $usernames;
        $_SESSION["isadmin"] = $loginRow["admin"];
        header("Location: index.php");

}
else
{
    echo "Incorrect  username or password please register <a href='register.html'> here </a> ";
}


?>