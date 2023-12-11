<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

$limit = 3;
if (isset($_GET['pgno'])) {
  $pgno = $_GET['pgno'];
} else {
  $pgno = 1;
}

$start = ($pgno - 1) * $limit;
// Fetching Data from Database 
$fetch = "SELECT * FROM `show_time` as s JOIN `theater_list` as t ON s.theater_id = t.id JOIN `movie_list` as m ON m.mid = s.movie_id LIMIT {$start}, {$limit}";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {

  ?>



  <div class="container">
    <!-- Hoverable Table rows -->
    <div class="card mt-5">
      <h5 class="card-header"><strong>Show Data</strong></h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th><strong>ID</strong></th>
              <th><strong>Theater Name</strong></th>
              <th><strong>Movie Name</strong></th>
              <th><strong>Show Time</strong></th>
              <th><strong>Show Date</strong></th>
              <th><strong>Actions</strong></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" id="tab">

            <!-- Diplaying Show Data From Database Through looping when user register they will desplayed on the page -->
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <!-- Fetching Show Data from Database -->
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                    <?php echo $row['show_id'] ?>
                  </strong></td>
                <td>
                  <?php echo $row['theater_name'] ?>
                </td>
                <td>
                  <?php echo $row['name'] ?>
                </td>
                <td>
                  <?php echo $row['theater_date'] ?>
                </td>
                <td>
                  <?php echo $row['theater_time'] ?>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="update_show_input.php?show_id=<?php echo $row['show_id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="show_delete.php?show_id=<?php echo $row['show_id']?>"><i class="bx bx-trash me-1"></i> Delete</a>
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
      <!-- Pagination -->
      <?php
    $query = "SELECT * FROM `show_time`";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
      $total_record = mysqli_num_rows($result);
      $total_pages = ceil($total_record / $limit);
      echo '<ul class="pagination mt-2">';
      if ($pgno > 1) {
        echo '<li class="page-item"><a class="page-link" href="showtime_data.php?pgno=' . ($pgno - 1) . '">Prev</a></li>';
      }
      for ($i = 1; $i <= $total_pages; $i++) {
        $active = $i == $pgno ? 'active' : '';
        echo '<li class="page-item ' . $active . '"><a class="page-link" href="showtime_data.php?pgno=' . $i . '">' . $i . '</a></li>';
      }
      if ($pgno < $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="showtime_data.php?pgno=' . ($pgno + 1) . '">Next</a></li>';
      }
      echo '</ul>';
    }
    ?>
  <!--/ Hoverable Table rows -->
</div>
<?php
include('footer.php');
?>
