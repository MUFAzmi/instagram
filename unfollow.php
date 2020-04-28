<?php
        //unfollowing the user, means deleting the requested row from the database server.
        require_once('include/header.php');
            $from_user_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['id']));
            $to_user_id = htmlentities(mysqli_real_escape_string($con,$_POST['sender_id']));
            $query = "SELECT * FROM `follow` WHERE `from_user_id`='$from_user_id' and `to_user_id` = '$to_user_id'";
            $run = mysqli_query($con,$query);
                $row = mysqli_num_rows($run);
                    if($row > 0){
                        $from_user_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['id']));
                        $to_user_id = htmlentities(mysqli_real_escape_string($con,$_POST['sender_id']));
                        $query = "DELETE FROM `follow` WHERE `from_user_id`='$from_user_id' AND `to_user_id`= '$to_user_id'";
                        $run = mysqli_query($con,$query);
                        }
                    else{
                         echo "<script>alert('you already unfollowed that user')</script>";
                        }

?>