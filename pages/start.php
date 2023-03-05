<?php 
    session_start();
    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/code++.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/start.css">
    <title>Automated Teller Machine</title>
</head>
<body>
    
    <div class="start-container">
        <a id="logout-account-btn" href="../utils/logout.php">Logout</a>
    </div>

</body>
</html>