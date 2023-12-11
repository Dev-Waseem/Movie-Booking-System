<?php
include('config.php');

//lOGIN Page
session_start();
if(isset($_SESSION['useremail'])){
    header('Location:index.php');
}

if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * from `users` where `email` = '$email'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$db_pass = $row['password'];
		$pass_decode = password_verify($password, $db_pass);
		if($pass_decode == $password){
            //Storing in Session Data
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['useremail'] = $row['email'];
            

            echo "<script>alert('Login Successfull!');</script>";
			header("Location:index.php");
		}
        else{
            echo "<script>alert('Invalid Password');</script>";
        }
    }
else {
    echo "<script>alert('Invalid Email');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Lon-in</title>
</head>
<body>
    
    <div class="wapperp">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input_box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember">
                <label><input type="checkbox" required>Remember me</label>
                <a href="#" id="fpassword">Forget password</a>
            </div>

            <button type="submit" class="btn" name="Login">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php" id="singup"> Singup</a></p>
            </div>
        </form>
    </div>

</body>
</html>