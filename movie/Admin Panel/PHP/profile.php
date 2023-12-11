<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

// User profile display
if (isset($_SESSION['id'])) {
  // Retrieve user data from the database based on session user_id
  $user_id = $_SESSION['id'];


?>

                <?php
     $sql = "SELECT * FROM `users` WHERE `id` = $user_id";
     $result = mysqli_query($connection, $sql);
 
     if (mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_assoc($result);
    ?>
<div class="container">
    <div class="main-body mt-4">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo 'image/' . $row['image']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row['username']?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['username']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['phone']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['gender']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['DOB']?>
                    </div>
                  </div>
                  <hr>
                  <?php
     }
    }
                  ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="editprofile.php?id=<?php echo $row['id']?>">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              


            </div>
          </div>

        </div>
    </div>
    <?php
    include('footer.php');
    ?>