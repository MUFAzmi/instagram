<?php require_once('include/header.php') ?>
<?php
    if(isset($_GET['d'])){
        $session_id = $_SESSION['id'];
        $post_delete_id = htmlentities(mysqli_real_escape_string($con,$_GET['d']));
        $query =  "SELECT `from_user_id` FROM `posts` WHERE `post_id` = '$post_delete_id'";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);
        $from_user_id = htmlentities(mysqli_real_escape_string($con,$data['from_user_id']));
        if($session_id == $from_user_id){
            $query = "DELETE FROM `posts` WHERE `post_id` = '$post_delete_id'";
            $run = mysqli_query($con,$query);
            if($run){
                header('LOCATION:dashboard');
            }
        }
        else{
            ?>
                <script> alert('Sale Chootiya Apna Dimagh Mat Laga ');</script>
            <?php
            }
        }
        else{
            header('LOCATION:dashboard');
        }
?>