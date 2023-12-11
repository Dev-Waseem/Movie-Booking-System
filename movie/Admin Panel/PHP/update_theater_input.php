<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$theater_id = $_GET['id'];
$fetch = "SELECT * FROM `theater_list` WHERE `id` = '$theater_id'";
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
          <h5 class="card-header">Edit Theater</h5>
          <div class="card-body">
            <form action="update_theater_data.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Theater Name</label>
                  <input class="form-control" type="hidden" name="id" autofocus required value="<?php echo $row['id']?>" />
                  <input class="form-control" type="text" name="theater_name" autofocus required value="<?php echo $row['theater_name']?>" />
                </div>
                <?php
    }
}
                ?>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2" name="submit">Save Changes</button>
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