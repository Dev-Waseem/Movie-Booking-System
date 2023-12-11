<?php
include('config.php');

//THeater Date
if(isset($_POST['selected_theater'])){

    $theater_id = $_POST['selected_theater'];
    
    $fetch = "SELECT * FROM `show_time` where `theater_id` = '$theater_id'";
    $get_date = mysqli_query($connection, $fetch);
    if (mysqli_num_rows($get_date) > 0) {
        while ($row = mysqli_fetch_assoc($get_date)) {
            echo '<option value="' . $row['theater_date'] . '">' . $row['theater_date'] . '</option>';
            
        }
    }
    
}

//Theater time
if(isset($_POST['selected_Date'])) {
   $theater_id = $_POST['selected_theater'];
    $theater_date = $_POST['selected_Date'];
   
    


    $fetch = "SELECT * FROM `show_time` WHERE `theater_date` = '$theater_date'";
    $get_time = mysqli_query($connection, $fetch);
    
    if (mysqli_num_rows($get_time) > 0) {
        while ($time = mysqli_fetch_assoc($get_time)) {
          //  echo $time['theater_time'];
          echo '<option value="' . $time['theater_time'] . '">' . $time['theater_time'] . '</option>';
        }
    }
}


?>