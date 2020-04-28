<?php
require_once('include/header.php');
$query = "SELECT * FROM `follow` WHERE  `to_user_id` = '1'";
$run = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($run)){
    $from_user_id = htmlentities(mysqli_real_escape_string($con,)); $data['from_user_id'];
    $query1 = "SELECT * FROM `users` WHERE `id` = '$from_user_id'";
    $run1 = mysqli_query($con,$query1);
    while($data1 = mysqli_fetch_assoc($run1)){
        $name =  $data1['name'];
        $image = $data1['image'];
        $id = $data1['id'];
        echo $name;
    }
}
?>
<p style="width:100%; color:blue;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur delectus perspiciatis est numquam cum rem optio molestias adipisci reiciendis repellat cumque dolorem consequatur fugit nesciunt at error harum odio, necessitatibus illum magnam quam quas? Eos esse consequuntur quia minus quasi dolorem sed praesentium delectus, fuga placeat culpa, repellat sit vitae aliquam modi ab totam repellendus at fugiat unde? Illum assumenda asperiores necessitatibus sapiente reprehenderit in laudantium, mollitia laborum placeat et saepe odio? Inventore iure voluptas facilis laudantium dolorem, natus officiis voluptatem esse, laboriosam minima unde eligendi aut dolor labore nobis. Aperiam itaque doloribus ab recusandae architecto ex doloremque harum cumque.</p>