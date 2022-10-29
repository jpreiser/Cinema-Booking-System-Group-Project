<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script>
        function check_pwd() {
            if (document.getElementById('pwd').value ==
                document.getElementById('conf-pwd').value) {
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('submit').disabled = true;
            }
        }
    </script>
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
    <div class="container">
        <h2>Create an Account</h2>
        <center>
            <h4>*Required Fields</h4>
        </center>
        <div class="register">
            <center>
                <form id="register" action="reg-exec.php" method="post">
                    <p>
                        <label><b>*Email Address</b></label>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label><b>*Password</b></label>
                        <input type="password" id="pwd" name="pwd" required>
                    </p>
                    <p>
                        <label><b>*Confirm Password</b></label>
                        <input type="password" id="conf-pwd" name="conf-pwd" required>
                    </p>
                    <p>
                        <label><b>*Name</b></label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" required>

                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    </p>
                    <p>
                        <label><b>*Date of Birth</b></label>
                        <input type="date" id="dob" name="dob" required>
                    </p>
                    <p>
                        <label><b>Credit or Debit Card Number</b></label>
                        <input type="text" id="ccnum" name="ccnum" />
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
                        <input type="text" id="cvc" name="cvc">
                    </p>
                    <p>
                        <label for="address"><b>Address</b></label>
                        <input type="text" id="address" name="address">
                    </p>
                    <p>
                        <label for="city"><b>City</b></label>
                        <input type="text" id="city" name="city">
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
                        <input type="text" id="zip" name="zip">
                    </p>
                    <p>
                        <input type="checkbox" id="promos" name="promos">
                        I would like to receive emails about promotions
                    </p>
                    <input type="submit" value="Submit">
                </form>
                <p>
                    Already have an account?
                    <a href="index.php" class="plain-text-link">Login Here</a>
                </p>

            </center>
        </div>
    </div>
</body>