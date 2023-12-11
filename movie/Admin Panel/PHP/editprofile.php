<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$get_id = $_GET['id'];
$fetch = "SELECT * FROM `users` where `id` = '$get_id'";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {


    ?>
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y ">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
              <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
              </li>
              </li>
            </ul>
            <div class="card mb-4">
              <h5 class="card-header">Profile Details</h5>
              <!-- Account -->
              <hr class="my-0" />
              <div class="card-body">
                <form action="editprofile_data.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Username</label>
                      <input class="form-control" type="hidden" name="id" autofocus value="<?php echo $row['id'] ?>" />
                      <input class="form-control" type="text" id="username" name="username" placeholder="Alex Jhon"
                        autofocus value="<?php echo $row['username'] ?>" />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input class="form-control" type="email" id="email" name="email" placeholder="john.doe@example.com"
                        value="<?php echo $row['email'] ?>" />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="phoneNumber" name="number" class="form-control" value="<?php echo $row['phone'] ?>" placeholder="0332 111222" />
                      </div>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="form-label" class="form-label">Gender</label>
                      <select id="defaultSelect" class="form-select" name="gender">
                        <option><?php echo $row['gender'] ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="form-label" class="form-label">Date of Birth</label>
                      <input class="form-control" type="date" name="date" id="html5-date-input" value="<?php echo $row['DOB'] ?>">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="form-label" class="form-label">Profile Image</label>
                      <input class="form-control" type="file" name="image" value="<?php echo $row['image'] ?>"/>
                      <p class="text-muted mb-0 mt-1">Allowed JPG, GIF or PNG. Max size of 800K</p>

                    </div>

                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2" name="submit">Save changes</button>
                  </div>
                </form>
              </div>
              <!-- /Account -->
            </div>

            <!-- / Content -->
            <?php
  }
}
?>


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