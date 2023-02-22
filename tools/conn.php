<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'atm';

    
    $conn = mysqli_connect($server, $username, $password, $database);

    if($conn) {
        echo("<script>console.log('You are connected!')</script>");
    } else {
        echo("Error: " . mysqli_connect_error());
    }
?>