<?php
if (isset($_SESSION['useremail'])) {
	header('Location:login.php');
}
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Movie Ticket Booking Website</title>
    <style>
    .seat.booked {
        color: red;
    }
    .seat.selected {
        color: green;
    }
</style>
<script>


$(document).ready(function () {

    var selectedSeats = [];


    $('.seat.available').on('click', function () {
        var seatNo = $(this).data('seat');

        $(this).toggleClass('selected');

    
        if ($(this).hasClass('selected')) {
            selectedSeats.push(seatNo);
        } 
        
        else {
        
            var index = selectedSeats.indexOf(seatNo);
            if (index !== -1) {
                selectedSeats.splice(index, 1);
            }
        }
    });



$('#book_ticket').on('click', function () {
 
        var theaterId = $('#theaterSelect').val();
        var selectedDate = $('#selectdate').val();
        var selectedTime = $('#select_time').val();
   
    
        var selectedSeats = [];
        $('.seat.selected').each(function () {
            selectedSeats.push($(this).data('seat'));
        });


            var bookingId = $('#boo').val();

         


        $.ajax({
            type: 'POST',
            url: 'process_selected_seats.php',
            data: {
                theaterId: theaterId,
                selectedDate: selectedDate,
                selectedTime: selectedTime,
                selectedSeats: selectedSeats,
                bookingId: bookingId,
            },
            success: function (response) {
                console.log(response);
       
            },
          
        });
    });


});








</script>
</head>

<body>
    <?php
    //Dispaying Movie Detail 
    if (isset($_GET['mid'])) {
        $movie_id = $_GET['mid'];
        $fetch = "SELECT * FROM `movie_list` WHERE `mid` = $movie_id";
        $get_movie = mysqli_query($connection, $fetch);
        if (mysqli_num_rows($get_movie) > 0) {
            $row = mysqli_fetch_assoc($get_movie);
            ?>
            <div class="book">
                <div class="left">
                    <img src="<?php echo 'Admin Panel/PHP/image/' . $row['image'] ?>" alt="" id="poster">
                    <div class="play">
                        <i class="bi bi-play-fill" id="play"></i>
                    </div>
                    <div class="cont">
                        <h4>DESCRIPTION</h4>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>Release Date :
                                <?php echo $row['release'] ?>
                            </li>
                            <li><i class="fa fa-list"></i> Genre :
                                <?php echo $row['genre'] ?>
                            </li>
                            <li><i class="fa fa-star"></i>Cast :
                                <?php echo $row['cast'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="head_time">
                        <h1 id="title" style="font-size: 40px;">
                            <?php echo $row['name'] ?>
                        </h1>
                    <?php
        }
    }
    ?>
                <div class="time">
                    <h6><i class="bi bi-clock"></i> 165 minutes</h6>
                    <button>PG-13</button>
                </div>
            </div>

            <div class="date_type">
                <!-- theater List-->
                <div class="right_card">
                    <h3 class="title">Theater Selection</h3>
                    <div class="card_month">
                        <select id="theaterSelect" class="form-select" aria-label="Default select example">
                            <?php
                            $fetch = "SELECT * FROM `show_time` as st inner join `theater_list`  AS TL on st.theater_id = tl.id where `movie_id` = '$movie_id'";
                            $get_date = mysqli_query($connection, $fetch);
                            if (mysqli_num_rows($get_date) > 0) {
                                while ($row = mysqli_fetch_assoc($get_date)) {
                                    echo '<option value="'.$row['theater_id'].'">'.$row['theater_name'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- theater time -->
                <div class="right_card">
                    <h3 class="title">Show Date</h3>
                    <div class="card_month">
                        <select class="form-select" id="selectdate" aria-label="Default select example">
                    
                    </select>
                    </div>
                </div>
                <!-- theater time end -->

                <!-- theater Date  -->


                <div class="left_card">
                    <h3 class="title">Show Time</h3>
                    <div class="card_month">
                        <select id="select_time" class="form-select" aria-label="Default select example">
                    </select>
                    </div>
                </div>

            </div>

            <div class="screen" id="screen">
                Screen
            </div>

            <!-- chairs  -->
            <div class="chair" id="chair">
                <div class="row">
                    <span>A</span>
                   
                    <?php
                    $fetch = "SELECT * FROM `seats` where status = 'Booked'";
                    $get_seats = mysqli_query($connection, $fetch);
                    if (mysqli_num_rows($get_seats) > 0) {
                        while ($row = mysqli_fetch_assoc($get_seats)) {
                            ?>
                            <li class="seat booked">
                                <?php echo $row['seat_no'] ?>
                            </li>
                            <?php
                        }
                    }
                
                    $fetch = "SELECT * FROM `seats` where status = 'Available'";
                    $get_seats = mysqli_query($connection, $fetch);
                    if (mysqli_num_rows($get_seats) > 0) {
                        while ($row = mysqli_fetch_assoc($get_seats)) {

                            $movieee_id = $_GET['mid'];


                            ?>
                          <li class="seat available" data-seat="<?php echo $row['seat_no'] ?>" data-booking-id="<?php echo $movieee_id ?>">
            <?php echo $row['seat_no'] ?>
            
        </li>


        <?php
    }
}


$movieee_id = $_GET['mid'];
?>




                    <span>A</span>
                </div>
            </div>

            <input type="hidden" id="boo" value="<?php echo $movieee_id ?>">
            <button id="book_ticket">Book Now</button>

            <!-- Details  -->
            <div class="details" id="det">
                <div class="details_chair">
                    <li>Avalable</li>
                    <li>Booked</li>
                    <li>Selected</li>
                </div>
            </div>
            <button class="book_tic" id="book_ticket">
                <i class="bi bi-arrow-right-short"></i>
            </button>
            <button class="book_tic" id="back_ticket">
                <i class="bi bi-arrow-left-short"></i>
            </button>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="./appajax.js"></script>

    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.5/JsBarcode.all.js"
        integrity="sha512-wkHtSbhQMx77jh9oKL0AlLBd15fOMoJUowEpAzmSG5q5Pg9oF+XoMLCitFmi7AOhIVhR6T6BsaHJr6ChuXaM/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
