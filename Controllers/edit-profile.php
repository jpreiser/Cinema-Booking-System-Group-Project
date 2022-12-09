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
        $sql = "SELECT * FROM Customers, Credit_Cards WHERE customers.customer_id = credit_cards.customer_id AND customers.customer_id=$loggedin_id";
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
                        <input type="text" id="fname" name="fname" value="<?php echo $rows['first_name'] ?>">
                    </p>
                    <p>
                        <label for="lname"><b>Last Name</b></label>
                        <input type="text" id="lname" name="lname" value="<?php echo $rows['last_name'] ?>">
                    </p>
                    <p>
                        <label for="address"><b>Address</b></label>
                        <input type="text" id="address" name="address" value="<?php echo $rows['billingAddress']?>">
                    </p>
                    <p>
                        <label for="ccnum"><b>Credit or Debit Card Number</b></label>
                        
                        <input type="text" id="ccnum" name="ccnum" value="<?php echo $rows['card_number']?>">
                    </p>
                    <p>
                        <label><b>Expiration Date</b></label>
                        <!--
                        <?php echo substr($rows['expiration'], 0, 7); ?><br>
                        -->
                        <select name="year" id="year">
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
                        <select name="month" id="month">
                            <option value='1'>01</option>
                            <option value='2'>02</option>
                            <option value='3'>03</option>
                            <option value='4'>04</option>
                            <option value='5'>05</option>
                            <option value='6'>06</option>
                            <option value='7'>07</option>
                            <option value='8'>08</option>
                            <option value='9'>09</option>
                            <option value='10'>10</option>
                            <option value='11'>11</option>
                            <option value='12'>12</option>
                        </select>
                    </p>
                    <p>
                        <label><b>Security Code</b></label>
                        <input type="text" id="ccv" name="ccv" value="<?php echo $rows['ccv']?>">
                    </p>
                    <p>
                        <input type="checkbox" id="promos" value="promos">
                        I would like to receive emails about promotions
                    </p>

                    <input type="submit" value="Submit" name="submit">
                    <a href="profile.php" class="btn" style="float: right;">Cancel</a>
                </form>
            <?php
        }
            ?>
            </div>
    </div>
</body>