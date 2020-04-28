<?php require_once('include/header.php') ?>
 <!-- ***************************navbar code******************* -->

<?php 
    // *******************************fetching followings and followers counts*********************************
        $id = $_SESSION['id'];
        $query = "SELECT * FROM `follow` WHERE `from_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $followings_count = mysqli_num_rows($run);
        $query = "SELECT * FROM `follow` WHERE `to_user_id`='$id'"; //firing the query for fethcing the follwers count
        $run = mysqli_query($con,$query);
        $followers_count = mysqli_num_rows($run);
?>
 <!-- sending the chat message to the database sarver without reffreshing the password_get_inf -->
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s1 l1 m1 ">
                        <a href="camera" class=" left"> <i class="material-icons">camera_alt</i> </a>
                    </div>
                    <div class="col s9 m9 l9">
                        <h5>Instagram</h5>
                    </div>
                    <div class="col s1 m1 l1">
                            <a href="video" class=""> <i class="material-icons">tv</i> </a>
                        </div>
                    <div class="col s1 m1 l1">
                        <a href="message" class=""> <i class="material-icons">send</i> </a>
                    </div>
                </div>
            </nav>
</div>
<main class="blue lighten-5">

        <div class="row">
            <div class="col s12 m3 l3 hide-on-down-only"> <br>
                <div class="card-panel z-depth-0 center">
                    <img src="img/<?php if(isset($image) && !empty($image)){ echo $image;} else {echo "user.png";} ?>" class="responsive-img circle " style="width:130px; border: 2px solid brown;" alt="">
                    <h5 class="center"><?php echo $_SESSION['name']; ?><i class="material-icons tooltipped blue-text tiny" data-position="top" data-tooltip="Varfied Account" style="cursor:pointer;">check_circle</i></h5>
                    
                    <input type="submit" class="btn red" value="Follow" name="" id="">
                    <br> <br>
                    <div class="divider"></div>
                    <table>
                        <thead>
                            <tr>
                                <th>Followings</th>
                                <td><?php echo $followings_count; ?></td>
                           
                                <th>Followers</th>
                                <td><?php echo $followers_count; ?></td>
                            </tr>
                        </thead>
                    </table>
                    <div class="card-panel blue lighten-1">
                        <h4>About Me!</h4>
                        <p><?php echo $bio; ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <!-- story section --> <br>
                <div class="row">
                        <div class="col s2 m2 l2 ">
                            <a href="#showstorymodal" class="modal-trigger">
                            <img src="img/<?php echo $image; ?>" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                            <span style="font-size: 10px; center">mufazmi</span>
                            </a>
                        </div>
                            <div class="col s2 m2 l2">
                                <a href="#addstorymodal" class=" orange btn-floating btn-large z-depth-0 pulse modal-trigger"><i class="material-icons">add</i></a>
                            </div>
                        </div>
                        <!-- adding a modal to add story using modal -->
                        <div class="modal" id="addstorymodal">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-content">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="input-field file-field">
                                                <input type="file" name="image" class="dropify" data-show-remove="false" required>
                                            </div>
                                            <div class="input-field"> 
                                                <img src="img/<?php if(isset($session_image) && !empty($session_image)){echo $session_image;} else {echo "user.png";} ?>" alt="" class="responsive-img circle prefix" style="width:45px;  margin-left:5px;">
                                                <textarea id="" cols="30" rows="10" name="content" class="materialize-textarea" placeholder="What's on your mind?" style="height: 124px; padding-left: 20px; padding-top: 15px; border-bottom: none;"></textarea>
                                            </div> 
                                            <div class="input-field">
                                                <input type="submit" name="addstory" id="addstory" value="Add Story" style="width:100%;" class="btn btn-large">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- adding a modal to displaying the story in modal  -->
                        <div class="modal" id="showstorymodal">
                            <div class="row">
                                <div class="col s12 m12 l12"><img src="img/mufazmi.png" class="responsive-img" style="width:200px;" alt="">
                                </div>
                            </div>
                        </div>
           <!-- **************************************POST SECTION************************************* -->
           
           <?php
                        // fetching posts content form database server
                        $query = "SELECT * FROM `posts` WHERE `from_user_id` = '$session_id' order by `post_id` desc";
                        $run = mysqli_query($con,$query);
                        while($data = mysqli_fetch_assoc($run)){
                        $post_id = htmlentities(mysqli_real_escape_string($con,$data['post_id']));
                        $content = htmlentities(mysqli_real_escape_string($con,$data['content']));
                        $image = htmlentities(mysqli_real_escape_string($con,$data['image']));
                    ?>
                <div class="card z-depth-0">
                    <div class="" style="">
                                        <div class="col s2 m2 l2 center">
                                                <img src="img/mufazmi.png" style="width: 35px; margin-top:5px" class="left responsive-img circle" alt="">
                                            </div>
                                            <div class="col s8 m8 l8">
                                                <span class="left" style="margin-top: 10px; margin-left: -26px;"><?php echo $_SESSION['name']; ?></span>
                                            </div>
                                            <div class="col s2 m2 l2">
                                                <a href="#" data-target="post_dropdown" class="dropdown-trigger"> <i class="material-icons right"class=""style="margin-top: 13px; ">more_vert</i></a>
                                                <ul class="dropdown-content" id="post_dropdown">
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="delete?d=<?php echo $post_id; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                    </div>
                            <img src="img/<?php echo $image; ?>" class="responsive-img"  alt="">
                            <div class="content">
                                <p>
                                    <?php echo $content; ?>
                                </p>
                            </div>
                            <div class="row">
                                <form>
                                    <div class="col s1">
                                        <?php 
                                            // fetching that user liked this post or not, if likes then we will print dislike button 
                                            // $query = "SELECT * FROM `likes` WHERE `from_user_id`='$sender_id' AND `post_id` = '$post_id'";
                                            // $run = mysqli_query($con, $query);
                                            // $row = mysqli_rows($run);
                                        ?>
                                        <input type="hidden" name="" id="post_id" value=" <?php echo $post_id; ?> ">
                                        <input type="hidden" name="" id="sender_id" value="<?php echo $session_id; ?>">
                                        <a href=""><i class="material-icons love
                                        v m  ;p/ufirdos"  style=" transparent" onclick=" return sendLikes();" >favorite_border</i></a>
                                      
                                    </div>
                                </form>
                                <div class="col s1">
                                    <a href=""><i class="material-icons">message</i></a>
                                </div>
                                <div class="col s1">
                                    <a href=""><i class="material-icons">send</i></a>
                                </div>
                            </div>
                </div>
                        <?php } ?>
            </div>
            <!-- *******************************SECTION RIGHT SIGHT*************************************** -->
            <div class="col s12 m3 l3"> <br>
                <div class="card z-depth-0">
                    <h5>Who to follow?</h5>
                    <div class="row">
                        <!-- fetching users to suggest to the user to follow  -->
                        <?php
                            $query = "SELECT * FROM `users`";
                            $run = mysqli_query($con,$query);
                            while($data = mysqli_fetch_assoc($run)){
                                $username = htmlentities(mysqli_real_escape_string($con,$data['username']));
                                $image = htmlentities(mysqli_real_escape_string($con,$data['image']));
                                $user_id = htmlentities(mysqli_real_escape_string($con,$data['id']));
                            
                        ?>
                        <div class="col s4 m6 l4 center">
                            <div class="card center  z-depth-0 red lighten-4" style="border-radius: 20px;">
                                <a href="<?php echo $username; ?>">
                                    <img src="img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>"" alt="" class="responsive-img" style="border-radius: 20px 20px 0px 0px;">
                                    <span class="center"><b><?php echo $username; ?></b></span>
                                </a>
                                <input type="submit" name="follow" id="follow" value="Follow" class="btn orange darken-4" style="border-radius: 0px 0px 20px 20px; width: 100%;">
                            </div>
                        </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </main>
  <body>
      <!-- *************************footer code**************************** -->
<?php require_once('include/footer.php'); ?>