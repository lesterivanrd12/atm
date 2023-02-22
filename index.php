<?php 
    session_start();

    if(isset($_SESSION['login']) == TRUE) {

        header('Location: pages/start.php');

    } else {

        header('Location: pages/login.php');
    }


?>