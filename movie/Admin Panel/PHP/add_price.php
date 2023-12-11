<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

if(isset($_POST['submit'])){
    $class = $_POST['class'];
    $price = $_POST['price'];
    $age = $_POST['age'];

    $insert = "INSERT INTO `class`(`class_name`,`price`,`age`) VALUES ('$class', '$price', '$age')";
    $result = mysqli_query($connection, $insert);
    if($result){
        echo "<script>alert('Price Added Successfully !')</script>";
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
          <h5 class="card-header">Add Prices</h5>
          <div class="card-body">
            <form action="add_price.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Seat Category Name</label>
                  <input class="form-control" type="text" name="class" autofocus required/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Price</label>
                  <input class="form-control" type="text" name="price" autofocus required/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Age Section</label>
                  <input class="form-control" type="text" name="age" autofocus required/>
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