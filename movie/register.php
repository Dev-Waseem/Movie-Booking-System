<?php
include('config.php');


//Account Registrations for user
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $dob = mysqli_real_escape_string($connection, $_POST['dob']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);


    //Password Hashing for no one can see the password
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $name_check = "SELECT * FROM `users` where `username` = '$username'";
    $name_result = mysqli_query($connection, $name_check);

    $email_check = "SELECT * from `users` where `email` = '$email'";
    $email_result = mysqli_query($connection, $email_check);

    if (mysqli_num_rows($name_result) > 0) {
        echo "<script>alert('Username already exists');</script>";
    }
    if (mysqli_num_rows($email_result) > 0) {
        echo "<script>alert('Email already exists');</script>";
    } else {
        $query = "INSERT INTO `users` (`username`,`email`, `phone`,`gender`,`DOB`, `password`) VALUES ('$username', '$email','$phone', '$gender','$dob','$pass')";
        $result = mysqli_query($connection, $query);
        echo "<script>alert('Register Successfull!')</script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/sign_in.css">
    <title>Sign_In</title>
</head>

<body>

    <div class="wapperp">
        <form action="register.php" method="POST">
            <h1>SIGN UP</h1>
            <div class="input_box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input_box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input_box">
                <input type="number" placeholder="Phone Number" name="phone" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input_box">
                <input type="date" placeholder="Date of Birth" name="dob" required>
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <div class="input_box">
                <select class="form-select tranparent" aria-label="Default select example" name="gender" required>
                    <option selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember">
                <label><input type="checkbox" required>I agree all statements in </label>
                <a href="#" id="terms">Termes of Service</a>
            </div>

            <button type="submit" class="btn" name="submit">Regiter</button>

            <div class="register-link">
                <p>Already have an account?<a href="login.php" id="login"> Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>