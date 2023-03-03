<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/code++.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    
    <div class="login-container">   
        <h1>Enter 9 digit master key</h1>
        <form action="../utils/login-auth.php" method="post" id="login-form">
            <input
                type="text"
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
            >
        </form>
        <a href="../pages/registration.php">Create Account</a>
    </div>

</body>
</html>