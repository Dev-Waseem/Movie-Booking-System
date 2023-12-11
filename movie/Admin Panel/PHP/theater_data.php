<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

// Fetching Data from Database 
$fetch = "SELECT * FROM `theater_list`";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {

  ?>



  <div class="container">
    <!-- Hoverable Table rows -->
    <div class="card mt-5">
      <h5 class="card-header"><strong>Theater Data</strong></h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th><strong>ID</strong></th>
              <th><strong>Theater Name</strong></th>
              <th><strong>Actions</strong></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" id="tab">

            <!-- Diplaying User Data From Database Through looping when user register they will desplayed on the page -->
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <!-- Fetching User Data from Database -->
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                    <?php echo $row['id'] ?>
                  </strong></td>
                <td>
                  <?php echo $row['theater_name'] ?>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="update_theater_input.php?id=<?php echo $row['id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="theater_delete.php?id=<?php echo $row['id']?>"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
            }
}
?>
          <!-- Fetching User Data from Database -->
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->
</div>
<?php
include('footer.php');
?>
