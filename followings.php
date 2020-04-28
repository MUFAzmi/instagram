<?php
require_once('include/header.php');
$query = "SELECT * FROM `follow` WHERE  `from_user_id` = '1'";
$run = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($run)){
    $to_user_id = $data['to_user_id'];
    echo $to_user_id;
    $query1 = "SELECT * FROM `users` WHERE `id` = '$to_user_id'";
    $run1 = mysqli_query($con,$query1);
    while($data1 = mysqli_fetch_assoc($run1)){
        $name =  $data1['name'];
        $image = $data1['image'];
        $id = $data1['id'];
        echo $name;
    }
}
?>