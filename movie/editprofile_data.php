<?php
include('config.php');

if(isset($_POST['Submit'])){
    $user_id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
  
    move_uploaded_file($tmp_name, 'image/' . $img_name);
    $changes = "UPDATE `users` set `username`='$username' , `email`='$email' , `phone`='$number' , `gender`='$gender' , `DOB`='$date' , `image`='$img_name' WHERE `id` = '$user_id'";
    $result = mysqli_query($connection , $changes);
    if($result){
        echo "<script>alert('Save Changes Successfully !')</script>";
        header("Location: userprofile.php");
    }
    else{
        echo "<script>alert('Something Went Wrong !')</script>";
    }
  }
?>