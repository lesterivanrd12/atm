<?php require('../utils/conn.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/code++.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/registration.css">
    <title>Registration</title>
</head>
<body>
    
    <div class="registration-container">   
        <h1 style="text-align: center; font-size: 30px; margin-bottom: 20px;">Fill out this form:</h1>
        <form class="form-container" action="../utils/register-auth.php" method="post">

            <div class="input-row">
                <label for="fname">First Name:</label>
                <input id="reg-input" type="text" name="fname" required>
            </div>

            <div class="input-row">
                <label for="mname">Middle Name:</label>
                <input id="reg-input" type="text" name="mname" required>
            </div>

            <div class="input-row">
                <label for="lname">Last Name:</label>
                <input id="reg-input" type="text" name="lname" required>
            </div>

            <div class="input-row">
                <label for="birthdate">Birthdate:</label>
                <input id="reg-input" type="date" name="birthdate" required>
            </div>

            <div class="input-row">
                <label for="phone">Phone:</label>
                <input id="reg-input" type="text" name="phone" required>
            </div>

            <div class="input-row">
                <label for="email">Email:</label>
                <input id="reg-input" type="text" name="email" required>
            </div>

            <div class="input-row">
                <label for="password">Password</label>
                <input id="reg-input" type="password" name="password" required>
            </div>

            <div class="input-row">
                <label for="">Master Key</label>
                <input  id="reg-input" type="password" name="master_key" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="9">
            </div>

            <div class="input-row">
                <label for="region">Region: </label>
                <select id="reg-input" name="region" >
                    <option value="">--- Select Region ---</option>
                    <?php
                        // $records = mysqli_query($conn, "SELECT `region` FROM `phillocations` ORDER BY `region` ASC");

                        // while($data = mysqli_fetch_array($records)) {
                        //     echo "<option value=".$data['region'].">".$data['region']."</option>";
                        // }
                    ?>
                </select>
            </div>

            <div class="input-row">
                <label for="province">Province: </label>
                <select id="reg-input" name="province" id="">
                    <option value="">--- Select Province ---</option>
                    <?php
                        // $records = mysqli_query($conn, "SELECT `region` FROM `phillocations` ORDER BY `region` ASC");

                        // while($data = mysqli_fetch_array($records)) {
                        //     echo "<option value=".$data['region'].">".$data['region']."</option>";
                        // }
                    ?>
                </select>
            </div>

            <div class="input-row">
                <label for="city">City: </label>
                <select id="reg-input" name="city" id="">
                    <option value="">--- Select Province ---</option>
                    <?php
                        // $records = mysqli_query($conn, "SELECT `region` FROM `phillocations` ORDER BY `region` ASC");

                        // while($data = mysqli_fetch_array($records)) {
                        //     echo "<option value=".$data['region'].">".$data['region']."</option>";
                        // }
                    ?>
                </select>
            </div>

            <div class="input-row">
                <label for="barangay">Barangay:</label>
                <input  id="reg-input" type="text" name="barangay" required>
            </div>

            <div class="input-row">
                <input
                    type="submit"
                    value="Submit"
                    name="submit"
                    id="submit"
                >
                <a id="login-account-btn" href="../pages/login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html> 