<?php 

    session_start();

    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    }

    session_destroy();
?>

    <div class="start-container">
        <h1>Hello World!</h1>
        <a href="../pages/logout.php">Logout</a>
    </div>