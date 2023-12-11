<?php
include('config.php');

if(isset($_POST['submit'])){
    $class_id = $_POST['class_id'];
    $class_name = $_POST['class_name'];
    $price = $_POST['price'];
    $age = $_POST['age'];

    $insert = "UPDATE `class` SET `class_name` = '$class_name' , `price` = '$price' , `age` = '$age' where `class_id` = '$class_id'";
    $result = mysqli_query($connection, $insert);
    if ($result){
        echo "<script>alert('Data Update Successfully')</script>";
        header("Location: price_data.php");
    }
}

?>