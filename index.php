<?php 

    session_start();
    // Check if login condition is true, redirect user to Start page
    if(isset($_SESSION["login"]) == TRUE) {

        header('Location: ./pages/start.php');

    } else {
        // If login condition is false, redirect user to Login 
        header('Location: ./pages/login.php');
    }

?>