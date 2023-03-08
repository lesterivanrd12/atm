<?php

    require('../utils/conn.php');
    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    } {

        if(isset($_SESSION['master_key'])) {
            //Assisgn variable to user master key in session
            $master_key = $_SESSION['master_key'];
            // Select all data from user where master key is = to master key in session
            $sql = "SELECT * FROM users WHERE master_key = '$master_key'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                // Loop all data and assign to variables so we display it on account page
                while($row = $result->fetch_assoc()) {
                    $fname = $row['first_name'];
                    $mname = $row['middle_name'];
                    $lname = $row['last_name'];
                    $balance = $row['wallet_balance'];
                }
                
            } else {
                echo("Error! You need to login. <a href='../pages/login.php'>Login</a>");
            }

        }
    }


?>