<?php
    include('header.php');
if(!isset($_SESSION['useremail'])){
    header('Location:login.php');
}
include('sidebar.php');
include('topbar.php');
include('container.php');
include('footer.php');
include('config.php');

?>

