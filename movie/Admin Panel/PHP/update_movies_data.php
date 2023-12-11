<?php
include('config.php');

if(isset($_POST['submit'])){
    $movie_id = $_POST['mid'];
    $movie_name = $_POST['name'];
    $description = $_POST['description'];
    $release = $_POST['release'];
    $genre = $_POST['genre'];
    $cast = $_POST['cast'];
    $link = $_POST['link'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];

    move_uploaded_file($tmp_name, 'image/' . $img_name);
    $insert = "UPDATE `movie_list` SET `name` = '$movie_name' , `description` = '$description' , `release` = '$release' , `genre` = '$genre' , `cast` = '$cast' , `image` = '$img_name' , `link` = '$link' where `mid` = '$movie_id'";    $result = mysqli_query($connection, $insert);
    if ($result){
        echo "<script>alert('Data Update Successfully')</script>";
        header("Location: movie_data.php");
    }
}

?>