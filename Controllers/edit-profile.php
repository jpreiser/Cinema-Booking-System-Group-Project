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
         $customer_sql = "SELECT * FROM Customers WHERE customer_id='$_SESSION[login_user]'";
         $credit_card_sql = "SELECT * FROM credit_cards WHERE customer_id=(SELECT customer_id FROM Customers WHERE customer_id='$_SESSION[login_user]')";
         $customer_result = mysqli_query($db, $customer_sql);
         $card_result = mysqli_query($db, $credit_card_sql);
        ?>
        <?php
        while ($rows = mysqli_fetch_array($customer_result)) {
            $rows2 = mysqli_fetch_array($card_result);
        ?>
            <div id="edit-profile" class="edit-profile">
                <h2>Edit Profile</h2>
                <form id="edit-profile" action="profile-update.php" method="post">
                    <p>
                        <label for="fname"><b>First Name</b></label>
                        <input type="text" id="fname" name="fname" placeholder="<?php echo $rows['first_name'] ?>">
                    </p>
                    <p>
                        <label for="lname"><b>Last Name</b></label>
                        <input type="text" id="lname" name="lname" placeholder="<?php echo $rows['last_name'] ?>">
                    </p>
                    <p>
                        <label for="address"><b>Address</b></label>
                        <input type="text" id="address" name="address" placeholder="<?php 
                        if(isset($rows2['billingAddress'])){
                            echo $rows2['billingAddress'];
                        }else{
                            echo "*Address*";
                        }?>">
                    </p>
                    <p>
                        <label for="ccnum"><b>Credit or Debit Card Number</b></label>
                        
                        <input type="text" id="ccnum" name="ccnum" placeholder="<?php 
                        if(isset($rows2['card_number'])){
                            echo $rows2['card_number'];
                        }else{
                            echo "*Card Number*";
                        }?>">
                    </p>
                    <p>
                        <label><b>Expiration Date</b></label>
                        <!--
                        <?php 
                        if(isset($rows2['expiration'])){
                            echo substr($rows2['expiration'], 0, 7);
                        }else{
                            echo "*Expiration*";
                        }?><br>
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
                        <input type="text" id="ccv" name="ccv" placeholder="<?php 
                        if(isset($rows2['ccv'])){
                            echo $rows2['ccv'];
                        }else{
                            echo "*ccv*";
                        }?>">
                    </p>
                    <p>
                        <input type="checkbox" id="promos" placeholder="promos">
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
</html>