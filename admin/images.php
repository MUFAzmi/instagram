<?php require_once('include/header.php'); ?>
<?php require_once('include/navbar.php'); ?>
<?php require_once('include/sidenav.php'); ?>
<div class="row">
            <?php
                // fetchin all posts from database server
                $query = "SELECT * FROM `posts` order by `from_user_id` desc";
                $run = mysqli_query($con,$query);
                while($data=mysqli_fetch_assoc($run)){
                    $loveyoufirdos =  $data['image'];
            ?>
            <?php for($count = 0; $count < 6 ; $count++){ ?>
                <div class="col l2s m2 s12">
                    <div class="card z-depth-2" style="border-radius:20px;">
                        <div class="card-image" style="cursor:pointer;">
                            <img src="../img/<?php echo $loveyoufirdos; ?>" style="border-radius:20px;" alt="" class="responsive-img">
                        </div>
                    </div>
                </div>  
           <?php } ?>
           <?php } //closing the while loop tag here, the while loop is applide on at card ?>
</div>
<?php require_once('include/footer.php'); ?>