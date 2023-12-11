<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

if(isset($_POST['submit'])){
    $theater_name = $_POST['theater_name'];

    $insert = "INSERT INTO `theater_list`(`theater_name`) VALUES ('$theater_name')";
    $result = mysqli_query($connection, $insert);
    if($result){
        echo "<script>alert('Theater Added Successfully !')</script>";
    }
    else{
        echo "<script>alert('Something Went Wrong !')</script>";
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
          <h5 class="card-header">Add Theater</h5>
          <div class="card-body">
            <form action="add_movie_theater.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Theater Name</label>
                  <input class="form-control" type="text" name="theater_name" autofocus required/>
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2" name="submit">Add Theater</button>
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