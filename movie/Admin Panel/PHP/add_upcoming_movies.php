<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];

    // Move uploaded file
    move_uploaded_file($tmp_name,  'image/' . $img_name);

   // Use prepared statement to avoid SQL injection
$insert = "INSERT INTO `movie_news`(`title`, `description`, `release`,`link`, `image`) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connection, $insert);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $title, $description, $date, $link, $img_name);

// Execute the statement
$result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Movie News Added Successfully !')</script>";
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($connection);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

?>
<!-- Your HTML code continues here -->



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
          <h5 class="card-header">Add Movies</h5>
          <div class="card-body">
            <form action="add_upcoming_movies.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Movie Title</label>
                  <input class="form-control" type="text" name="title" required />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Description</label>
                  <input class="form-control" type="text" name="description" required />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Release Date</label>
                  <input class="form-control" type="date" name="date" required />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Image</label>
                  <input class="form-control" type="file" name="image" required />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Trailer Link</label>
                  <input class="form-control" type="text" name="link" required />
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2" name="submit">Add</button>
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