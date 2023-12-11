<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');


// Fetching User Data from Database 
$fetch = "SELECT * FROM `class`";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {
?>

<div class="container">
  <div class="col-12">
    <div class="card mt-5">
      <h5 class="card-header"><strong>Movie List</strong></h5>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Seat Category Name</th>
              <th>Price</th>
              <th>Age Section</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="tab">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><strong><?php echo $row['class_id'] ?></strong></td>
                <td><?php echo $row['class_name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="update_price.php?class_id=<?php echo $row['class_id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="price_delete.php?class_id=<?php echo $row['class_id']?>"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
                
              </tr>
            <?php
            }

          }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>
