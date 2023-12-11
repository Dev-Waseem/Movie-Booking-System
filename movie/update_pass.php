<?php
include('config.php');

if(isset($_POST['Submit'])){
    $user_id = $_POST['id'];
    $curr_pass = $_POST['curr_pass'];
    $new_pass = $_POST['new_pass'];
    $re_pass = $_POST['re_pass'];

    // Fetch the current hashed password from the database
    $check_curr_pass = "SELECT `password` FROM `users` WHERE `id` = '$user_id'";
    $check_curr_pass_query = mysqli_query($connection, $check_curr_pass);

    if($check_curr_pass_query && $row = mysqli_fetch_assoc($check_curr_pass_query)){
        $hashed_password = $row['password'];

        // Verify the current password
        if (password_verify($curr_pass, $hashed_password)) {
            // Validate new password and update if valid
            if ($new_pass == $re_pass) {
                // Hash the new password before updating
                $hashed_new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_pass = "UPDATE `users` SET `password` = '$hashed_new_pass' WHERE `id` = '$user_id'";
                $update_pass_query = mysqli_query($connection, $update_pass);

                if($update_pass_query){
                    echo "<script>alert('Password changed successfully');</script>";
                    echo "<script>window.location.href = 'userprofile.php';</script>";
                } else {
                    echo "<script>alert('Error updating password');</script>";
                    echo "<script>window.location.href = 'userprofile.php';</script>";
                }
            } else {
                echo "<script>alert('New password and confirm password do not match');</script>";
                echo "<script>window.location.href = 'userprofile.php';</script>";
            }
        } else {
            echo "<script>alert('Incorrect current password');</script>";
            echo "<script>window.location.href = 'userprofile.php';</script>";
        }
    } else {
        echo "<script>alert('Error fetching current password');</script>";
        echo "<script>window.location.href = 'userprofile.php';</script>";
    }
}
?>
