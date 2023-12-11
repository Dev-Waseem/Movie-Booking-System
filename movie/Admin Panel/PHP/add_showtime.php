<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

if (isset($_POST['submit'])) {
    $theater_name = $_POST['theater_name'];
    $movie_name = $_POST['movie_name'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $insert = "INSERT INTO `show_time`(`theater_id`, `movie_id`, `theater_date`, `theater_time`) VALUES ('$theater_name','$movie_name','$date','$time')";
    $result = mysqli_query($connection, $insert);
    if ($result) {
        echo "<script>alert('Show Added Successfully !')</script>";
    } else {
        echo "<script>alert('Something Went Wrong: " . mysqli_error($connection) . "')</script>";
    }
    

}


?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                    </li>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Add Show</h5>
                    <div class="card-body">
                        <form action="add_showtime.php" method="POST">
                            <div class="row">
                                <?php
                                $fetch = "SELECT * FROM `theater_list`";
                                $result = mysqli_query($connection, $fetch);
                                if (mysqli_num_rows($result) > 0) {
                                    ?>
                                    <div class="mb-3 col-md-6">
                                        <label for="form-label" class="form-label">Theater Selection</label>
                                        <select id="defaultSelect" class="form-select" name="theater_name" required>
                                            <option>Default select</option>
                                            <?php
                                            while ($theater = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $theater['id'] . '">' . $theater['theater_name'] . '</option>';
                                            }
                                }

                                ?>
                                    </select>
                                </div>

                                <?php
                                $fetch = "SELECT * FROM `movie_list`";
                                $result = mysqli_query($connection, $fetch);
                                if (mysqli_num_rows($result) > 0) {
                                    ?>
                                    <div class="mb-3 col-md-6">
                                        <label for="form-label" class="form-label">Movie Selection</label>
                                        <select id="defaultSelect" class="form-select" name="movie_name" required>
                                            <option>Default select</option>
                                            <?php
                                            while ($movie = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $movie['mid'] . '">' . $movie['name'] . '</option>';
                                            }
                                }

                                ?>

                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Time</label>
                                    <input class="form-control" type="time" name="time" autofocus required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date</label>
                                    <input class="form-control" type="date" name="date" autofocus required />
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" name="submit">Add Show
                                        Time</button>
                                </div>
                        </form>
                    </div>
                </div>

                <!-- /Account -->
            </div>

            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<?php
include('footer.php');
?>