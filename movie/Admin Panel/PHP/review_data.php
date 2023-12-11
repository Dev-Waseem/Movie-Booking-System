<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');


// Fetching User Data from Database 
$fetch = "SELECT * FROM `reviews` as r JOin users as u on r.user_id = u.id";
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
              <th>User's Review</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody id="tab">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><strong><?php echo $row['id'] ?></strong></td>
                <td><?php echo $row['review'] ?></td>
                <td><?php echo $row['username'] ?></td>
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
