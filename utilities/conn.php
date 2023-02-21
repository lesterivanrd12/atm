<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'atm';

    
    $connect = mysqli_connect($server, $username, $password, $database) or die("Error: " . mysqli_connect_error($connect));

    if($connect) {
        echo("<script>console.log('You are connected!')</script>");
    }
?>