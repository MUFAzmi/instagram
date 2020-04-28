<?php
        require_once('include/header.php');
        $from_user_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['id']));
        $to_user_id = htmlentities(mysqli_real_escape_string($con,$_POST['to_user_id']));
        $query = "SELECT * FROM `follow` WHERE `from_user_id`='$from_user_id' and `to_user_id` = '$to_user_id'";
        $run = mysqli_query($con,$query);
            $row = mysqli_num_rows($run);
                if($row < 1){
                    $from_user_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['id']));
                    $to_user_id = htmlentities(mysqli_real_escape_string($con,$_POST['to_user_id']));
                    $query = "INSERT INTO `follow` (`to_user_id`, `from_user_id`) VALUES ('$to_user_id', '$from_user_id')";
                    $run = mysqli_query($con,$query);
                    }
                else{
                    echo "<script>alert('you have already following this user')</script>";
                    }
?>