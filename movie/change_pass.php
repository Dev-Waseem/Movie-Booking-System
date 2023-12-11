<?php
include('config.php');

$get_id = $_GET['id'];
$fetch = "SELECT * FROM `users` where `id` = '$get_id'";
$result = mysqli_query($connection, $fetch);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
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
</head>
<body>
    
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="<?php echo 'img/' . $row['image']?>" alt="Admin" class="rounded-circle" width="150">
								<div class="mt-3">
									<h4><?php echo $row['username']?></h4></h4>
									<button class="btn btn-outline-primary" onclick="window.location.href='userprofile.php'">Back</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<form action="update_pass.php" method="post">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Current Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
									<input type="password" class="form-control" name="curr_pass">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">New Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="password" class="form-control" name="new_pass">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Confirm Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="password" class="form-control" name="re_pass">
								</div>
							</div>
							<?php
  }
}
							?>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" name="Submit" value="Change Password">
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>