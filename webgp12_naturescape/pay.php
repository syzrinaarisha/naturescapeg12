<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <Title>Payment</Title>
        <link rel="stylesheet" href="stylePay.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <img src="images/logout.png" class="logo" onclick="window.location.href = 'logout.php'" style="width: 20px; height: 20px; margin-top: 2px;">
                </ul>
                
            </div>

            
    <div class="container">
        <div class="title">Payment</div>
        <form id="contact-form" role="form" action="insertdb2.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <label for="form_name"><span class="details">Full Name</span></label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="input-box">
                    <label for="form_email"><span class="details">Email</span></label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="input-box">
                    <label for="form_address"><span class="details">Address</span></label>
                    <input id="form_address" type="text" name="address" class="form-control" placeholder="Enter address" required>
                </div>

                <div class="input-box">
                    <label for="form_city"><span class="details">City</span></label>
                    <input id="form_city" type="text" name="city" class="form-control" placeholder="Enter city" required>
                </div>

                <div class="input-box">
                    <label for="form_state"><span class="details">State</span></label>
                    <input id="form_state" type="text" name="state" class="form-control" placeholder="Enter state" required>
                </div>

                <div class="input-box">
                    <label for="form_zipcode"><span class="details">Zip Code</span></label>
                    <input id="form_zipcode" type="text" name="zipcode" class="form-control" placeholder="Enter zip code" required>
                </div>

                <div class="input-box">
                    <label for="form_card"><span class="details">Accepted Card</span></label>
                    <img src="images/card.png" width="120">
                </div>

                <div class="input-box">
                    <label for="form_card"><span class="details">Credit Card Number</span></label>
                    <input id="form_card" type="text" name="card" class="form-control" placeholder="Enter card number" required>
                </div>

                <div class="input-box">
                    <label for="form_month"><span class="details">Exp Month</span></label>
                    <input id="form_month" type="text" name="month" class="form-control" placeholder="Enter exp month" required>
                </div>

                <div class="input-box">
                    <label for="form_year"><span class="details">Exp Year</span></label>
                    <input id="form_year" type="text" name="year" class="form-control" placeholder="Enter exp year" required>
                </div>

                <div class="input-box">
                    <label for="form_cvv"><span class="details">CVV</span></label>
                    <input id="form_cvv" type="text" name="cvv" class="form-control" placeholder="Enter cvv" required>
                </div>

            </div>

            <div class="button">
                <input type="submit" value="Done">
            </div>
        </form>
    </div>

    </div>
</body>

</html>