<?php
include('config.php');

$input = $_POST['search'];

$result = mysqli_query($connection, "SELECT * FROM `users` where `username` like '%$input%'");
if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$data['id'].'</th>
        <td>'.$data['username'].'</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['password'].'</td>
    </tr>';
    }
}
?>