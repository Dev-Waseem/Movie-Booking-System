<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['userid'];
    $theaterId = $_POST['theaterId'];
    $selectedDate = $_POST['selectedDate'];
    $selectedTime = $_POST['selectedTime'];
    $selectedSeats = $_POST['selectedSeats'];
    $movie_id=$_POST['bookingId'];


 include 'config.php';

   
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

 
    $theaterId = mysqli_real_escape_string($connection, $theaterId);
    $selectedDate = mysqli_real_escape_string($connection, $selectedDate);
    $selectedTime = mysqli_real_escape_string($connection, $selectedTime);
    $movie_id = mysqli_real_escape_string($connection,  $movie_id);
    foreach ($selectedSeats as $seat) {
        $seat = mysqli_real_escape_string($connection, $seat);

  
    $sql = "INSERT INTO booking(`user_id`,`theater_id`,`seats`,`DATE`,`TIME`,`movie_id`) VALUES ($user_id,'$theaterId','$seat','$selectedDate','$selectedTime','$movie_id')";
$sql1 = "UPDATE `seats` SET `status` = 'Booked' where `seat_no` = '$seat'";

    if (mysqli_query($connection, $sql)) {

        $showId = mysqli_insert_id($connection);

        }
        if (mysqli_query($connection, $sql1)) {

            $showId = mysqli_insert_id($connection);
    
            }



    }

        $response = ['status' => 'success', 'message' => 'Seats booked successfully'];
    } else {
        $response = ['status' => 'error', 'message' => 'Error: ' . mysqli_error($connection)];
    }


    mysqli_close($connection);

    header('Content-Type: application/json');
    echo json_encode($response);

?>
