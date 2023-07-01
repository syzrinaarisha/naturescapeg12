<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: logout.php");
}

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM registerdata WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: pay.php");
        }
        else{
            echo
            "<script> alert('Wrong password'); </script>";  
            header("Location: login.php");   
        }
    } 
    else {
        echo
        "<script> alert('User not registered'); </script>"; 
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Login Test</title>
        <link rel="stylesheet" href="styleTest.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/f9af9fa8b1.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="banner">
            <div class="navbar">
                <img src="images/logo.png" class="logo" style="margin-top: -3%;">
                <ul style="margin-bottom: 10%; margin-right: -15%;">
                    <li><a href="#" onclick="window.location.href = 'index.html'">Home</a></li>
                    <li><a href="#" onclick="window.location.href = 'Highlight.html'">Highlight</a></li>
                    <li><a href="#" onclick="window.location.href = 'Products.html'">Products</a></li>
                    <li><a href="#" onclick="window.location.href = 'AboutUs.html'">About Us</a></li>
                    <li><a href="#" onclick="window.location.href = 'ourTeam.html'">Our Team</a></li>
                    <li><a href="#" onclick="window.location.href = 'registration.php'">Register</a></li>
                    <img src="images/logout.png" class="logo" onclick="window.location.href = 'logout.php'" style="width: 20px; height: 20px; margin-top: -5px">
                </ul>      
            </div>

        <center>
            <div class="box">
                <span class="borderLine"></span>
                <form id="contact-form" role="form" class="" action="" method="post" autocomplete="off">
                    <h2>Login</h2>
                    <p><br>Enter your information to login</p>

                    <div class="inputBox">
                        <label for="username"><span>Username or Email</span></label>
                        <input type="text" name="usernameemail" class="form-control" id="usernameemail" required value="">
                        <i></i>
                    </div>

                    <div class="inputBox">
                        <label for="password"><span>Password</span></label>
                        <input type="password" name="password" class="form-control" id="password" required value="">                 
                        <i></i>
                    </div>

                    <center>
                    <input type="submit" value="SUBMIT" name="submit">     
                    </center>    
                </form>
                <br>    
            </div>
        </center>
        </div>
    </body>
</html>


