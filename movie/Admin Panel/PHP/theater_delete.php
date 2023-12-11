<?php
include('config.php');

$theater_id = $_GET['id'];
$query = "DELETE FROM `theater_list` where `id` = '$theater_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo "<script>alert('Data Deleted Successfully !')</script>";
    header('Location: theater_data.php');
}
else{
    echo "<script>alert('Something went wrong !')</script>";
}


?>