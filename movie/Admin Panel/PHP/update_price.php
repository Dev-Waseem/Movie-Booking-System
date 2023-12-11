<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$class_id = $_GET['class_id'];
$fetch = "SELECT * FROM `class` WHERE `class_id` = '$class_id'";
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
                            <h5 class="card-header">Edit Prices</h5>
                            <div class="card-body">
                                <form action="update_price_data.php" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Seat Category Name</label>
                                            <input class="form-control" type="hidden" name="class_id" autofocus
                                                value="<?php echo $row['class_id']; ?>" />
                                            <input class="form-control" type="text" name="class_name" autofocus
                                                value="<?php echo $row['class_name']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Prices</label>
                                            <input class="form-control" type="text" name="price" autofocus
                                                value="<?php echo $row['price']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Age Section</label>
                                            <input class="form-control" type="text" name="age" autofocus
                                                value="<?php echo $row['age']; ?>" />
                                        </div>
                                        <?php
    }
}
?>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" value="submit" name="submit">Save
                                        Changes</button>
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