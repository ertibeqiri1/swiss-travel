<?php
session_start();
if (!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<body style="background: #fff;">
<div class="box">
    <h1>Welcome, <span>admin page</span></h1>
    <p>This is an <span>admin</span> page</p>
    
    
    
    <br>
    <button><a href="../bookbern/dashboard.php">Bern</a></button>
    <br>
    <button><a href="../booknewyork/dashboard.php">New York</a></button>
    <br>
    <button><a href="../bookparis/dashboard.php">Paris</a></button>
    <br>
    <button><a href="../bookrome/dashboard.php">Rome</a></button>
    <br>
    <button><a href="../booksofia/dashboard.php">Sofia</a></button>
    <br>
    <button><a href="../bookmadrid/dashboard.php">Madrid</a></button>
    <br>
    <button><a href="../contactus/contactDash.php">Contact Us</a></button>
    <br><br>
    <button class="logout" onclick="window.location.href='logout.php'">Logout</button>
    
    

</div>
<style>

body {
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}


.box {
    
    justify-content: space-between;
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}


.box h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}


.box p {
    font-size: 16px;
    color: #666;
}


button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    transition: 0.3s ease-in-out;
}


button {
    background:rgb(130, 125, 124);
    color: white;
}


button a {
    text-decoration: none;
    color: white;
    display: block;
    padding: 10px;
}
.box .logout{
    background-color: red;
   
}





button:hover {
    opacity: 0.8;
}
</style>


</body>
</html>