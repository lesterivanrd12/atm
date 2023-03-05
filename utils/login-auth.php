
<?php
            
    session_start();
    require('../utils/conn.php');

    // Create variable/s
    $master_key = $_POST['master_key'];

    // Create SELECT query
    $sql = "SELECT * FROM users WHERE master_key = '$master_key'";
    $result = $conn->query($sql);

        if($result->num_rows > 0) {  
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                
                $_SESSION['master_key'] = $row['master_key'];
                $_SESSION['login'] = true;

            }
            header('Location: ../pages/start.php');

        } else {
                echo("Invalid Masker Key Combination! <a href='../pages/login.php'>Try again</a>");
        }

    $conn->close();
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
    <style>
        body {
            background-color: #1161c3;
            color: #fff;
            margin: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>