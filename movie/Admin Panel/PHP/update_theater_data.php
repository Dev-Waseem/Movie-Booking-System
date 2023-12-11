<?php
include('config.php');

if(isset($_POST['submit'])){
    $theater_id = $_POST['id'];
    $theater_name = $_POST['theater_name'];

    $insert = "UPDATE `theater_list` SET `theater_name` = '$theater_name' where `id` = '$theater_id'";
    $result = mysqli_query($connection, $insert);
    if ($result){
        echo "<script>alert('Data Update Successfully')</script>";
        header("Location: theater_data.php");
    }
}
