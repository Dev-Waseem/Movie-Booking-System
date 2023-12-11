<?php
include('config.php');
?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome <?php echo $_SESSION['username']?>! 🎉</h5>
                          <p class="mb-4">
                            Hello <span class="fw-bold"><?php echo $_SESSION['username']?> !</span> Now you can handle Your Website Through this <strong>Admin Panel</strong>
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/user.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total User</span>
                          <!-- Displaying total user count rows from database -->
                          <?php
                          $count_query = "SELECT * FROM `users`";
                          $result = mysqli_query($connection, $count_query);
                          if($count_no = mysqli_num_rows($result)){
                            echo '<h3 class="card-title mb-2">'.$count_no.'</h3>';
                          }
                          else{
                            echo '<h3 class="card-title mb-2">No Data</h3>';
                          }
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/camera.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Theater</span>
                           <!-- Displaying total theater count rows from database -->
                           <?php
                          $count_query = "SELECT * FROM `theater_list`";
                          $result = mysqli_query($connection, $count_query);
                          if($count_no = mysqli_num_rows($result)){
                            echo '<h3 class="card-title mb-2">'.$count_no.'</h3>';
                          }
                          else{
                            echo '<h3 class="card-title mb-2">No Data</h3>';
                          }
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/camera.png" alt="Credit Card" class="rounded" />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Movies</span>
                          <!-- Displaying total movie count rows from database -->
                          <?php
                          $count_query = "SELECT * FROM `movie_list`";
                          $result = mysqli_query($connection, $count_query);
                          if($count_no = mysqli_num_rows($result)){
                            echo '<h3 class="card-title mb-2">'.$count_no.'</h3>';
                          }
                          else{
                            echo '<h3 class="card-title mb-2">No Data</h3>';
                          }
                          ?>
                        </div>
                      </div>
                    </div>

                  </div>
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

    <div class="buy-now">
    </div>