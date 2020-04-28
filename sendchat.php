<?php
    require_once('include/dbcon.php');
    $from_user_id = htmlentities(mysqli_real_escape_string($con,$_POST['sender_id']));
    $to_user_id =  htmlentities(mysqli_real_escape_string($con,$_POST['reciever_id']));
    $msg = htmlentities(mysqli_real_escape_string($con,$_POST['chat_message']));
    $query = "INSERT INTO `chat_message` (`from_user_id`, `to_user_id`, `chat_message`) VALUES ('$from_user_id', '$to_user_id', '$msg')";
    $run = mysqli_query($con,$query);
?>
