<?php 
require_once('dbcon.php');

    if(isset($_GET['d'])){

    }
    else{
        header("LOCATION:../allposts.php");
    }
    if(isset($_GET['d'])){
        $del_id = $_GET['d'];
        $query = "DELETE FROM `blog_posts` WHERE `blog_post_id` = '$del_id'";
        $run = mysqlI_query($con,$query);
        if($run){
            header("LOCATION:../allposts.php");
        }
        else{
            echo "failed to delete your requested posts";
        }
    }
?>