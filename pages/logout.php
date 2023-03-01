<?php
    // Start and Destroy session for logging out
    session_start();
    session_destroy();
    echo("Logged out succesfully! <a href='../index.php'>Login</a>");

?>