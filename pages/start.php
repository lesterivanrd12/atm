<?php 
    session_start();
    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    } 
?>

    <?php include('../components/header.php'); ?>
    <div class="start-container">
        <h1>Hello World!</h1>
        <a href="../pages/logout.php">Logout</a>
    </div>