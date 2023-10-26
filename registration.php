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
    <meta name="viewport" content="width=R, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>

    <div class="container">
        <img src="logo.png" alt="Logo">
        <h1>Registration</h1>
        <div class="form-container">
            <form action="registration.php" method="post">

                <div class="flex-container-name">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first-name" placeholder="Firstname:">
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middle-name" placeholder="Middlename:">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last-name" placeholder="Lastname:">
                    </div>
                </div>
                <div class="flex-container-phone-date">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone-number" placeholder="Phone number:">
                    </div>
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" class="form-control" name="birthdate">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address:">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email:">
                </div>

                <div class="flex-container-password">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password:">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password"
                            placeholder="Confirm Password:">
                    </div>
                </div>

                <label>Gender</label>
                <div class="flex-container-checkbox">
                    <div class="form-group">
                        <input type="checkbox" name="male" id="male">
                        <label for="male">male</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="female" id="female">
                        <label for="female">female</label>
                    </div>
                </div>


                <div class="form-btn">
                    <button type="submit" value="Register" name="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
                <div class="form-btn">
                    <p>Already Have an Account? <a class="btn btn-primary" href="login.php">Login Here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>