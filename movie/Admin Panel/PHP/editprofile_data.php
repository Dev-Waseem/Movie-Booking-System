<?php
session_start();
include('config.php');

if(isset($_POST['submit'])){
    $user_id = $_SESSION['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
  
    move_uploaded_file($tmp_name, 'image/' . $img_name);
    $changes = "UPDATE `users` set `username`='$username' , `email`='$email' , `phone`='$number' , `gender`='$gender' , `DOB`='$date' , `image`='$img_name' WHERE `id` = '$user_id'";
    $result = mysqli_query($connection , $changes);
    $_SESSION['username'] = $username;
    $_SESSION['useremail'] = $email;
    $_SESSION['number'] = $number;
    $_SESSION['gender'] = $gender;
    $_SESSION['DOB'] = $date;
    $_SESSION['image'] = $img_name;
    if($result){
        echo "<script>alert('Save Changes Successfully !')</script>";
        header("Location: profile.php");
    }
    else{
        echo "<script>alert('Something Went Wrong !')</script>";
    }
  }
?>