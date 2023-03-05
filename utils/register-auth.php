<?php
    session_start();
    require('../utils/conn.php');
    
    // Create Variable/s
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $master_key = $_POST['master_key'];
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    
    // Create INSERT INTO query
    $sql = "INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `birthdate`, `phone`, `email`, `password`, `master_key`, `region`, `province`, `city`, `barangay`) VALUES ('$fname','$mname','$lname','$birthdate','$phone','$email','$password','$master_key','$region','$province','$city','$barangay')";
    $result = $conn->query($sql);

    if($result) {
        echo("Account created <a href='../pages/login.php'>Login</a>!");
    } else {
        echo("Error: " . mysqli_error($result));
    }

?>