<?php
include('config.php');

$user_id = $_GET['id'];
$user_id_safe = mysqli_real_escape_string($connection, $user_id);

// Fetch user details
$userDetailsQuery = "SELECT id, username, image FROM users WHERE id = '$user_id_safe'";
$userDetailsResult = mysqli_query($connection, $userDetailsQuery);

if ($userDetailsResult && mysqli_num_rows($userDetailsResult) > 0) {
    $userDetails = mysqli_fetch_assoc($userDetailsResult);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <!-- Display user details card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?php echo 'img/' . $userDetails['image']?>" alt="User" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo $userDetails['username']?></h4>
                                        <button class="btn btn-outline-primary" onclick="window.location.href='logout.php'">Logout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Fetch and display booking history -->
                        <?php
                        $bookingHistoryQuery = "SELECT 
                        u.id as user_id,
                        u.username,
                        GROUP_CONCAT(b.booking_id) as booking_id,
                        m.name ,
                        t.theater_name,
                        GROUP_CONCAT(b.seats) as seats,
                        b.DATE,
                        b.TIME
                    FROM `booking` as b 
                    JOIN users as u ON b.user_id = u.id 
                    JOIN movie_list as m ON m.mid = b.movie_id 
                    JOIN theater_list as t ON t.id = b.theater_id 
                    WHERE b.user_id = '$user_id_safe'
                    GROUP BY u.id, u.username, m.name, t.theater_name, b.DATE, b.TIME";
                    

                        $bookingHistoryResult = mysqli_query($connection, $bookingHistoryQuery);

                        if ($bookingHistoryResult && mysqli_num_rows($bookingHistoryResult) > 0) {
                            ?>
                            <div class="card mt-5">
                                <h5 class="card-header"><strong>Booking History</strong></h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Movie Name</th>
                                                <th>Theater Name</th>
                                                <th>Seats</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($bookingRow = mysqli_fetch_assoc($bookingHistoryResult)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $bookingRow['name'] ?></td>
                                                    <td><?php echo $bookingRow['theater_name'] ?></td>
                                                    <td><?php echo implode(', ', explode(',', $bookingRow['seats'])) ?></td>
                                                    <td><?php echo $bookingRow['DATE'] ?></td>
                                                    <td><?php echo $bookingRow['TIME'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                        } else {
                            echo '<p>No booking history found.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    // Handle case where user details are not found
    echo '<p>User not found.</p>';
}
?>
