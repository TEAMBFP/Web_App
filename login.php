<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">

        <img src="Logo.png" alt="Logo">
        <h1>Account Login</h1>
        <div class="form-container">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div class="form-btn">
                    <button type="submit" value="Login" name="login" class="btn btn-primary">
                        Login
                    </button>
                </div>
                <div>
                    <p>Dont Have an Account? <a href="registration.php">Register Here</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>