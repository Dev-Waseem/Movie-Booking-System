<?php
include('config.php');

if(isset($_POST['submit'])){
    $show_id = $_POST['show_id'];
    $theater_id = $_POST['theater_id'];
    $movie_id = $_POST['movie_id'];
    $theater_time = $_POST['time'];
    $theater_date = $_POST['date'];

    $insert = "UPDATE `show_time` SET `theater_id` = '$theater_id' , `movie_id` = '$movie_id' , `theater_time` = '$theater_time' , `theater_date` = '$theater_date' where `show_id` = '$show_id'";
    $result = mysqli_query($connection, $insert);
    if ($result){
        echo "<script>alert('Data Update Successfully')</script>";
        header("Location: showtime_data.php");
    }
}

?>