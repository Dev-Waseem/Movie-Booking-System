<?php
include('header.php');
include('sidebar.php');
include('topbar.php');
include('config.php');

// Fetching User Data from Database 
$fetch = "SELECT * FROM `users`";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {

  ?>



  <div class="container">
    <!-- Hoverable Table rows -->
    <div class="card mt-5">
      <h5 class="card-header"><strong>User Data</strong></h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th><strong>ID</strong></th>
              <th><strong>Username</strong></th>
              <th><strong>Email</strong></th>
              <th><strong>Phone</strong></th>
              <th><strong>Gender</strong></th>
              <th><strong>Date Of Birth</strong></th>
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
                  <?php echo $row['username'] ?>
                </td>
                <td>
                  <?php echo $row['email'] ?>
                </td>
                <td>
                  <?php echo $row['phone'] ?>
                </td>
                <td>
                  <?php echo $row['gender'] ?>
                </td>
                <td>
                  <?php echo $row['DOB'] ?>
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