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
        <h2> <?php
                $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
                if ($remarks == null and $remarks == "") {
                    echo ' <div id="reg-head" class="headrg">Create an Account</div> ';
                }
                if ($remarks == 'success') {
                    echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
                }
                if ($remarks == 'failed') {
                    echo ' <div id="reg-head-fail" class="headrg">Account Already Exists</div> ';
                }
                if ($remarks == 'error') {
                    echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: ' . $_GET['value'] . ' </div> ';
                }
                ?></h2>
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
                        <label><b>Credit or Debit Card Number</b></label>
                        <input type="text" id="ccnum" name="ccnum" />
                    </p>
                    <p>
                        <label><b>Expiration Date</b></label>
                        <input type="text" id="exp-date" name="exp-date" />
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