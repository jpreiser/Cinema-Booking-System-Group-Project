<?php
include('session.php');
?>

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
    <?php
        $sql = "SELECT * FROM Customers WHERE customer_id=$loggedin_id";
        $result = mysqli_query($db, $sql);
        ?>
        <?php
        while ($rows = mysqli_fetch_array($result)) {
        ?>
        <div id="edit-profile" class="edit-profile">
            <h2>Edit Profile</h2>
            <form id="edit-profile" action="profile-update.php" method="post">
                <p>
                    <label for="fname"><b>First Name</b></label>
                    <?php echo $rows['first_name']; ?><br>
                    <input type="text" id="fname" name="fname">
                </p>
                <p>
                    <label for="lname"><b>Last Name</b></label>
                     <?php echo $rows['last_name']; ?><br>
                    <input type="text" id="lname" name="lname">
                </p>
                <p>
                    <label for="address"><b>Address</b></label>
                    <?php echo $rows['address']; ?><br>
                    <input type="text" id="address" name="address">
                </p>
                <p>
                    <label for="ccnum"><b>Credit or Debit Card Number</b></label>
                    <?php echo $rows['ccnum']; ?><br>
                    <input type="text" id="ccnum" name="ccnum"/>
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
                    <?php echo $rows['cvc']; ?><br>
                    <input type="text" id="cvc" name="cvc"/>
                </p>
                <p>
                    <input type="checkbox" id="promos" value="promos">
                    I would like to receive emails about promotions
                </p>
                
                <input type="submit" value="Submit" name="submit">
            </form>
            <?php
        }
        ?>
        </div>
    </div>
</body>