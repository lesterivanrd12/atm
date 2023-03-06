<?php 
    session_start();
    require('../utils/conn.php');
    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    }

    $sql = "SELECT * FROM `users`";
    $result = $conn->query($sql);
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

    <?php  while($row = $result->fetch_assoc()) { ?>
        <div class="account-container">
            <h1>ACCOUNT: <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']?></h1>
            <h1>BALANCE: P<?php echo $row['wallet_balance'] ?></h1>
        </div>
    <?php } ?>
    <a id="main-btn" href="../utils/logout.php">Logout</a>
</body>
</html>