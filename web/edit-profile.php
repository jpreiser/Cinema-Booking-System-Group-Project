<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header id="header" role="banner">
        <div id="header-left">
            <h1 href="landing.php" title="UGA Theaters">UGA Theaters</h1>

        </div>
    </header>

    <?php
    include "navbar.php";
    ?>
    <div id="container" class="container">
        <div id="edit-profile" class="edit-profile">
            <h2>Edit Profile</h2>
            <form id="edit-profile" method="post">
                <p>
                    <label for="fname"><b>First Name</b></label>
                    <input type="text" id="fname" name="fname" placeholder="John">
                </p>
                <p>
                    <label for="lname"><b>Last Name</b></label>
                    <input type="text" id="lname" name="lname" placeholder="Smith">
                </p>
                <!--
                <p>
                    <label for="email"><b>Email Address</b></label>
                    <input type="email" id="email" name="email" placeholder="jsmith001@gmail.com">
                </p>
                -->
                <p>
                    <label for="dob"><b>Date of Birth</b></label>
                    <input type="date">
                </p>
                <p>
                    <label for="phone"><b>Phone Number</b></label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </p>
                <p>
                    <label for="address"><b>Address</b></label>
                    <input type="text" id="address" name="address" placeholder="123 Lane">
                </p>
                <p>
                    <label for="city"><b>City</b></label>
                    <input type="text" id="city" name="city" placeholder="Athens">
                </p>
                <p>
                    <label for="state"><b>State</b></label>
                    <select id="state" name="state">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </p>
                <p>
                    <label for="zip"><b>ZIP</b></label>
                    <input type="text" id="zip" name="zip" placeholder="30609">
                </p>
                <p>
                    <label for="ccnum"><b>Credit or Debit Card Number</b></label>
                    <input type="text" id="ccnum" name="ccnum" placeholder="" />
                </p>
                <p>
                    <label><b>Expiration Date</b></label>
                    <select name="month" id="month">
                        <option value='1'>Jan</option>
                        <option value='2'>Feb</option>
                        <option value='3'>Mar</option>
                        <option value='4'>Apr</option>
                        <option value='5'>May</option>
                        <option value='6'>Jun</option>
                        <option value='7'>Jul</option>
                        <option value='8'>Aug</option>
                        <option value='9'>Sep</option>
                        <option value='10'>Oct</option>
                        <option value='11'>Nov</option>
                        <option value='12'>Dec</option>
                    </select>
                    <select name="year" id="year">
                        <option value='1'>2022</option>
                        <option value='2'>2023</option>
                        <option value='3'>2024</option>
                        <option value='4'>2025</option>
                        <option value='5'>2026</option>
                        <option value='6'>2027</option>
                        <option value='7'>2028</option>
                        <option value='8'>2029</option>
                        <option value='9'>2030</option>
                        <option value='10'>2031</option>
                    </select>
                </p>
                <p>
                    <label><b>Security Code</b></label>
                    <input type="text" id="cvc" name="cvc" placeholder="" />
                </p>
                <p>
                    <input type="checkbox" id="promos" value="promos">
                    I would like to receive emails about promotions
                </p>
                <!--
                <p>
                    <label for="pass"><b>Confirm Password</b></label>
                    <input type="password" id="pass" name="pass" placeholder="Password">
                </p>
                -->
                <input type="submit" value="Submit">
            </form>
            <!--<button><a href="profile.php" style="color: #101010;">Submit Changes</a></button>-->
        </div>
    </div>
</body>