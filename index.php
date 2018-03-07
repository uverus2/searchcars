<?php
session_start();
// Test that the authentication session variable exists
if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Go away!";
}
else
{    
    echo "You're logged in as ".$_SESSION["gatekeeper"];
    ?>
    



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--build:css css/main.min.css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- endbuild -->
</head>

<body>

    <nav>
        <ul id="menu-closed">
            <li>/<a href="index.php">home</a></li>
            <li>/<a href="login.html">about</a></li>
            <li>/<a href="find.html">contact</a></li>
            <ul>

    </nav>

    <a href="logout.php">Logout</a>
    <a href="post.php">Post</a>

    <section>

        <div class="search">
            <form action="php/search.php" method="get">

                <h1> <span>Search</span>Cars.com </h1>
                <input type="text" name="car" placeholder="Search">
                <input class="submit" value="search" type="image" src="data:image/png;base64,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">


            </form>

        </div>
    </section>
    <aside>


    </aside>



    <!--build:js js/main.min.js -->

    <!-- endbuild -->

</body>




</html>



<?php
}
?>