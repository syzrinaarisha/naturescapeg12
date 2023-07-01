<?php
require('connectform2.php');

$name =  $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$card = $_POST["card"];
$month = $_POST["month"];
$year = $_POST["year"];
$cvv = $_POST["cvv"];

$query = "INSERT INTO paymentdata (name, email, address, city, state, zipcode, card, month, year, cvv) 
VALUES ('$name','$email','$address', '$city', '$state', '$zipcode', $card, '$month', '$year', '$cvv')";
mysqli_query($conn,$query);

header("Location: index.html");

?>
