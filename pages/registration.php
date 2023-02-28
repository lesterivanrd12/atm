<?php require('../utils/conn.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    
    <div class="registration-container">   
        <h1>Fill out this form:</h1>
        <form class="form-container" action="../utils/register-auth.php" method="post">

            <div class="input-row">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" required>
            </div>

            <div class="input-row">
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" required>
            </div>

            <div class="input-row">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" required>
            </div>

            <div class="input-row">
                <label for="birthdate">Birthdate:</label>
                <input type="date" name="birthdate" required>
            </div>

            <div class="input-row">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" required>
            </div>

            <div class="input-row">
                <label for="email">Email:</label>
                <input type="text" name="email" required>
            </div>

            <div class="input-row">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="input-row">
                <label for="">Master Key</label>
                <input type="password" name="master_key" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="9">
            </div>

            <div class="input-row">
                <label for="region">Region: </label>
                <select name="region" >
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
                <select name="province" id="">
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
                <select name="city" id="">
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
                <input type="text" name="barangay" required>
            </div>

            <div class="input-row">
                <input
                    type="submit"
                    value="Submit"
                    name="submit"  
                >
            </div>

        </form>
        <a href="../pages/login.php">Login</a>
    </div>
</body>
</html> 