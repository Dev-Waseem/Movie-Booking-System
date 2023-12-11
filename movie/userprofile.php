<?php
session_start();
include('config.php');

// User profile display
if (isset($_SESSION['userid'])) {
  // Retrieve user data from the database based on session user_id
  $user_id = $_SESSION['userid'];

  $sql = "SELECT * FROM `users` WHERE `id` = $user_id";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="css/index.css">
    </head>

    <body>

      <div class="container">
        <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo 'img/' . $row['image']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row['username']?></h4>
                      <button class="btn btn-outline-primary" onclick="window.location.href='index.php'">Back to Home</button>
                      <button class="btn btn-outline-primary" onclick="window.location.href='logout.php'">Logout</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                      <path
                        d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z" />
                    </svg>
                    <a href="booking_history.php?id=<?php echo $row['id']?>" class="link-underline-light">Booking History</a>

                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                      <path
                        d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                    </svg>
                    <a href="change_pass.php?id=<?php echo $row['id']?>" class="link-underline-light">Change Password</a>
                  </li>
                </ul>
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
                      <h6 class="mb-0">Phone</h6>
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
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['DOB']?>
                    </div>
                  </div>
                  <?php
  }
}
?>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-danger " target="__blank" href="editprofile.php?id=<?php echo $row['id']?>">Edit</a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
  </div>

</body>

</html>