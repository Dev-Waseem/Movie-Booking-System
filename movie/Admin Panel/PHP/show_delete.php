<?php
include('config.php');

$show_id = $_GET['show_id'];
$query = "DELETE FROM `show_time` where `show_id` = '$show_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo "<script>alert('Data Deleted Successfully !')</script>";
    header('Location: showtime_data.php');
}
else{
    echo "<script>alert('Something went wrong !')</script>";
}


?>