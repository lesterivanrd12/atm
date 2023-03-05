
<?php
    
    session_start();
    require('../utils/conn.php');

    // Check if login condition is false, redirect users to Login page
    if(isset($_SESSION['login']) == FALSE ) {
        header('Location: ../pages/login.php');
    } 

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