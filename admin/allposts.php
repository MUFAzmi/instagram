<?php require_once('include/header.php'); ?>
<?php require_once('include/navbar.php'); ?>
<?php require_once('include/sidenav.php'); ?>
<div class="row">
            <?php
                // fetchin all posts from database server
                $query = "SELECT * FROM `blog_posts` order by `blog_post_id` desc";
                $run = mysqli_query($con,$query);
                while($data=mysqli_fetch_assoc($run)){
                    $blog_title =  $data['blog_post_title'];
                    $blog_content =  $data['blog_post_content'];
                    $blog_image = $data['blog_post_image'];
                    $blog_post_id = $data['blog_post_id'];
            ?>
    <div class="col l3 m3 s12">
        <div class="card z-depth-0">
            <div class="card-image">
                <img src="img/banner3.jpg" alt="" class="responsive-img">
                <a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">keyboard_arrow_left</i></a>
            </div>
     
            <div class="card-content">
                <h6 style="font-weight:bold;"><?php echo $blog_title ?></h6>
                <span><?php echo $blog_content; ?></span>
            </div>
            <div class="card-action">
                <div class="left">
                    <a href="posts?edit=<?php echo $blog_post_id; ?>"><i class="material-icons">edit</i></a>
                </div>
                <div class="right">
                    <a href="include/deletepost.php?d=<?php echo $blog_post_id; ?>"><i class="material-icons">delete</i></a>
                </div>
            </div>
        </div>
    </div>
                <?php } //closing the while loop tag here, the while loop is applide on at card ?>
</div>



<?php require_once('include/footer.php'); ?>