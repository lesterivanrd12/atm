<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'atm';

    
    $conn = mysqli_connect($server, $username, $password, $database) or die("Error: ". mysqli_connect_error($conn));

    if($conn) {
        echo("<script>console.log('Connected!')</script>");
    }
?>