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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>