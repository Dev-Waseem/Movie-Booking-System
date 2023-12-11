<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$movie_id = $_GET['id'];
$fetch = "SELECT * FROM `movie_news` WHERE `id` = '$movie_id'";
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
                            <h5 class="card-header">Edit Movies</h5>
                            <div class="card-body">
                                <form action="update_movie_news_data.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Movie Name</label>
                                            <input class="form-control" type="hidden" name="id" autofocus
                                                value="<?php echo $row['id']; ?>" />
                                            <input class="form-control" type="text" name="title" autofocus
                                                value="<?php echo $row['title']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Description</label>
                                            <input class="form-control" type="text" name="description" autofocus
                                                value="<?php echo $row['description']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Release Date</label>
                                            <input class="form-control" type="date" name="release" autofocus
                                                value="<?php echo $row['release']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Release Date</label>
                                            <input class="form-control" type="text" name="link" autofocus
                                                value="<?php echo $row['link']; ?>" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="firstName" class="form-label">Image</label>
                                            <input class="form-control" type="file" name="image" autofocus
                                                value="<?php echo $row['image']; ?>" />
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