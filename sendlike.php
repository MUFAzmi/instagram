<?php
session_start();
$session_id = $_SESSION['id'];
if(isset($session_id))
{

}
 else{
  header("location:login");
 }
 ?>

<?php
require_once('include/dbcon.php');
$from_user_id =  $_POST['sender_id'];
$post_id = $_POST['to_post_id'];
$query="INSERT INTO `likes` (`from_user_id`,`post_id`) VALUES ('$from_user_id','$post_id')"; 
$run = mysqli_query($con,$query);
?>