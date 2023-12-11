<?php
include('config.php');

$input = $_POST['search'];

$result = mysqli_query($connection, "SELECT * FROM `movie_list` where `name` like '%$input%'");
if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$data['mid'].'</th>
        <td>'.$data['name'].'</td>
        <td>'.$data['description'].'</td>
        <td>'.$data['release'].'</td>
        <td>'.$data['genre'].'</td>
        <td>'.$data['cast'].'</td>
        <td>'. $data['image'] .'</td>
    </tr>';
    }
}
?>