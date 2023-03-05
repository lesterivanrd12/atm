<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/code++.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    
    <div class="login-container">   
        <form action="../utils/login-auth.php" method="post" id="login-form">
            <label for="master_key">Enter 9 digit Master Key:</label>
            <input
                type="password"
                name="master_key"
                id="master_key"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                maxlength="9"
                required
            >
            <input
                type="submit"
                value="Submit"
                name="submit"
                id="submit"  
            >
            <a id="create-account-btn" href="../pages/registration.php">Create Account</a>
        </form>
    </div>

</body>
</html>