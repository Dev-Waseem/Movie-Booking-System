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
$fetch = "SELECT * FROM `movie_news` LIMIT {$start}, {$limit}";
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
              <th>Movie Name</th>
              <th>Description</th>
              <th>Release Date</th>
              <th>Link</th>
              <th>Images</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="tab">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><strong><?php echo $row['id'] ?></strong></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['release'] ?></td>
                <td><?php echo $row['link'] ?></td>
                <td><img src="<?php echo 'image/' . $row['image'] ?>" width="100px" height="150px"></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="update_movie_news.php?id=<?php echo $row['id']?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="movie_news_delete.php?id=<?php echo $row['id']?>"><i class="bx bx-trash me-1"></i> Delete</a>
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

    <!-- Pagination -->
    <?php
    $query = "SELECT * FROM `movie_news`";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
      $total_record = mysqli_num_rows($result);
      $total_pages = ceil($total_record / $limit);
      echo '<ul class="pagination mt-2">';
      if ($pgno > 1) {
        echo '<li class="page-item"><a class="page-link" href="movie_data.php?pgno=' . ($pgno - 1) . '">Prev</a></li>';
      }
      for ($i = 1; $i <= $total_pages; $i++) {
        $active = $i == $pgno ? 'active' : '';
        echo '<li class="page-item ' . $active . '"><a class="page-link" href="movie_data.php?pgno=' . $i . '">' . $i . '</a></li>';
      }
      if ($pgno < $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="movie_data.php?pgno=' . ($pgno + 1) . '">Next</a></li>';
      }
      echo '</ul>';
    }
    ?>
  </div>
</div>

<?php
include('footer.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    let query = $('#search')
    let tab = $('#tab')
    query.on('keyup', function () {
      $.ajax({
        url: 'search.php',
        type: 'POST',
        data: {
          search: query.val()
        },
        success: function (data) {
          console.log(data);
          tab.html(data)
        }
      })
    })
  })
</script>