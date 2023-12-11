<?php
include('config.php');

$class_id = $_GET['class_id'];
$query = "DELETE FROM `class` where `class_id` = '$class_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo "<script>alert('Data Deleted Successfully !')</script>";
    header('Location: price_data.php');
}
else{
    echo "<script>alert('Something went wrong !')</script>";
}


?>