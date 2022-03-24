<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description” content="This is an example of a meta description. 
        This will often show up in search results.”>
        <meta name=viewport content=width=device-width, initial-scale=1">
        <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


    <header>
        <nav>
            <a href="#">
                <img src="img/oklogo.png" alt="photo">
</a>
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">About me</a></li>
    <li><a href="#">Contact</a></li>
</ul>
<div>
        <form action="includes/login.inc.php" method="POST"> 
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwdd" placeholder="Password...">
        <button type="submit" name="login-submit"  >Login</button>
    </form>
    <a href="signup.php">Signup</a>
    <form action="includes/logout.inc.php" mehod="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</nav>
</header>
