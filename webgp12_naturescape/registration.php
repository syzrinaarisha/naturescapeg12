<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: logout.php");
    
}

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM registerdata WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
           echo
           "<script> alert('Username or Email has already taken'); </script>"; 
           header("Location: registration.php");
        }
        else{
            if($password == $confirmpassword){
                $query = "INSERT INTO registerdata VALUES('','$username', '$email', '$password')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successful'); </script>"; 
                header("Location: index.html");
            }
            else{
                echo
                "<script> alert('Password does not match'); </script>"; 
                header("Location: registration.php");
            }
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
                <img src="images/logout.png" class="logo" onclick="window.location.href = 'logout.php'" style="width: 20px; height: 20px; margin-top: -4px;">
            </ul>      
        </div>

    <center>
        <div class="box">
            <span class="borderLine"></span>
            <form id="contact-form" role="form" class="" action="" method="post" autocomplete="off">

                <h2>REGISTER</h2>
                <p>Enter your information to register</p>

                <div class="inputBox">
                    <label for="username"><span>Username</span></label>
                    <input type="text" name="username" class="form-control" id="username" required value="">                 
                    <i></i>
                </div>

                <div class="inputBox">
                    <label for="email"><span>Email</span></label>
                    <input type="text" name="email" class="form-control" id="email" required value="">                 
                    <i></i>
                </div>

                <div class="inputBox">
                    <label for="password"><span>Password</span></label>
                    <input type="password" name="password" class="form-control" id="password" required value="">                 
                    <i></i>
                </div>

                <div class="inputBox">
                    <label for="confirmpassword"><span>Confirm Password</span></label>
                    <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required value="">                 
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

