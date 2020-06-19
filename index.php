<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
    </head>

<body>
    <div class="loginbox">
        <img src="logo16.jpg" class="avatar">
        <h1>Apple Fitness Gym</h1>
        <form action="secure_login.php" method='post' id="bb">
            <p>Username</p>
            <input type="text"name="user_id_auth" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="Password" name="pass_key"  placeholder="Enter Password" required>
            <input type="submit" name="" value="Login">
           <a href="forgot_password.php" class="link">Forgot your password?</a><br>
            
        </form>
        
    </div>

    
</body>
</html>