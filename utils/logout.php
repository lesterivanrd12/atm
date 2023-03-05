<?php
    // Start and Destroy session for logging out
    session_start();
    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    } 
    
    session_destroy();
    echo("Logged out succesfully! <a href='../index.php'>Login</a>");

?>