<?php
include('config.php');

$movie_id = $_GET['id'];
$query = "DELETE FROM `movie_news` where `id` = '$movie_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo "<script>alert('Data Deleted Successfully !')</script>";
    header('Location: movie_news_data.php');
}
else{
    echo "<script>alert('Something went wrong !')</script>";
}


?>