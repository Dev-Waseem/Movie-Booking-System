<?php
include('config.php');

$movie_id = $_GET['mid'];
$query = "DELETE FROM `movie_list` where `mid` = '$movie_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo "<script>alert('Data Deleted Successfully !')</script>";
    header('Location: movie_data.php');
}
else{
    echo "<script>alert('Something went wrong !')</script>";
}


?>