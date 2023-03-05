<?php
    // Start and Destroy session for logging out
    session_start();
    session_destroy();
    echo("Logged out succesfully! <a href='../index.php'>Login</a>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
        body {
            background-color: #1161c3;
            color: #fff;
            margin: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>