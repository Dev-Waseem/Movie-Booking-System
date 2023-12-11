<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$show_id = $_GET['show_id'];
$fetch = "SELECT * FROM `show_time` WHERE `show_id` = '$show_id'";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
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
                        <form action="update_show_data.php" method="POST">
                            <div class="row">
                                <?php
                                $fetch = "SELECT * FROM `theater_list`";
                                $result = mysqli_query($connection, $fetch);
                                if (mysqli_num_rows($result) > 0) {
                                    ?>
                                    <div class="mb-3 col-md-6">
                                        <label for="form-label" class="form-label">Theater Selection</label>
                                        <input class="form-control" type="hidden" name="show_id" value="<?php echo $row['show_id']?>" autofocus required />
                                        <select id="defaultSelect" class="form-select" name="theater_id" value="<?php echo $row['theater_id']?>" required>
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
                                        <select id="defaultSelect" class="form-select" name="movie_id" value="<?php echo $row['movie_id']?>" required>
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
                                    <input class="form-control" type="time" name="time" value="<?php echo $row['theater_time']?>" autofocus required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date</label>
                                    <input class="form-control" type="date" name="date" autofocus required value="<?php echo $row['theater_date']?>" />
                                </div>
                                <?php
    }
}
                                ?>
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