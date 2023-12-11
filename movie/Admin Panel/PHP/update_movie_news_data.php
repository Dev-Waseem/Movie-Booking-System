<?php
include('config.php');

if(isset($_POST['submit'])){
    $movie_id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $release = $_POST['release'];
    $link = $_POST['link'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];

    move_uploaded_file($tmp_name, 'image/' . $img_name);

    // Use prepared statement to prevent SQL injection
    $stmt = $connection->prepare("UPDATE `movie_news` SET `title` = ?, `description` = ?, `release` = ?, `link` = ?, `image` = ? WHERE `id` = ?");
    $stmt->bind_param("sssssi", $title, $description, $release, $link, $img_name, $movie_id);
    
    // Execute the statement
    $stmt->execute();
    
    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Data Update Successfully')</script>";
        header("Location: movie_news_data.php");
    } else {
        echo "<script>alert('Error updating data')</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$connection->close();
?>
