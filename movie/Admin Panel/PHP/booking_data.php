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

// Fetching User Data from Database 
$fetch = "SELECT 
    u.id as user_id,
    u.username,
    GROUP_CONCAT(b.booking_id) as booking_id,
    m.name ,
    t.theater_name,
    GROUP_CONCAT(b.seats) as seats,
    b.DATE,
    b.TIME
FROM `booking` as b 
JOIN users as u ON b.user_id = u.id 
JOIN movie_list as m ON m.mid = b.movie_id 
JOIN theater_list as t ON t.id = b.theater_id 
GROUP BY u.id, u.username, m.name, t.theater_name, b.DATE, b.TIME
LIMIT {$start}, {$limit}";



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
              <th>Username</th>
              <th>Movie Name</th>
              <th>Theater Name</th>
              <th>Seats</th>
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><strong><?php echo $row['booking_id'] ?></strong></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['theater_name'] ?></td>
                <td><?php echo implode(', ', explode(',', $row['seats'])) ?></td>
                <td><?php echo $row['DATE'] ?></td>
                <td><?php echo $row['TIME'] ?></td>
              </tr>
            <?php
            }

          }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Pagination -->
    <?php
    $query = "SELECT * FROM `booking`";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
      $total_record = mysqli_num_rows($result);
      $total_pages = ceil($total_record / $limit);
      echo '<ul class="pagination mt-2">';
      if ($pgno > 1) {
        echo '<li class="page-item"><a class="page-link" href="booking_data.php?pgno=' . ($pgno - 1) . '">Prev</a></li>';
      }
      for ($i = 1; $i <= $total_pages; $i++) {
        $active = $i == $pgno ? 'active' : '';
        echo '<li class="page-item ' . $active . '"><a class="page-link" href="booking_data.php?pgno=' . $i . '">' . $i . '</a></li>';
      }
      if ($pgno < $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="booking_data.php?pgno=' . ($pgno + 1) . '">Next</a></li>';
      }
      echo '</ul>';
    }
    ?>
  </div>
</div>

<?php
include('footer.php');
?>
