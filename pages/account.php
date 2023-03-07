<?php 
    session_start();
    require('../utils/conn.php');
    require('../utils/account-auth.php');
    // Check if login condition is false, redirect users to Login page
    // if(isset($_SESSION['login']) == FALSE ) {
    //     header('Location: ../pages/login.php');
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    
    <?php if(!isset($_SESSION['master_key'])): header('Location: ../pages/login.php') ?>
    <?php else: ?>
        <h1>Account: <?php if(isset($fname, $mname, $lname)) echo $fname." ".$mname." ".$lname ; ?></h1>
        <h1>Balance: P<?php if(isset($balance)) echo $balance?></h1>
        <a id="main-btn" href="../pages/start.php">Other Transactions</a>
    <?php endif ?>
    

</body>
</html>