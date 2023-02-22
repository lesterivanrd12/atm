
<?php
            
    session_start();
    require('tools/conn.php');
    $master_key = $_POST['master-key'];
    $sql = "SELECT * FROM users WHERE master_key = '$master_key'";
    $result = $conn->query($sql);

        if($result->num_rows > 0) {  
            // output date of each row
            while($row = $result->fetch_assoc()) {

                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['middle_name'] = $row['middle_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['master_key'] = $row['master_key'];
                $_SESSION['login'] == true;

            } header('pages/start.php');
        } else {
                echo("<script>alert('Invalid Masker Key Combination!')</script>");
        }

    $conn->close();
                
?>