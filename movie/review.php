<?php
include('config.php');
session_start();

if (isset($_POST["submit"])) {
    $user_id = $_SESSION['userid'];
    $review = $_POST['review'];
    $movie_id = $_POST['movie_id'];

    $insert_query = "INSERT INTO `reviews` (movie_id, review, user_id) VALUES ('$movie_id', '$review', '$user_id')";
    $result = mysqli_query($connection, $insert_query);

    if ($result) {
        echo "<script>alert('Your review has been submitted');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
}
?>