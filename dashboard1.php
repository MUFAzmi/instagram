<?php require_once('include/header.php') ?>
 <!-- ***************************navbar code******************* -->
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
                    <img src="img/mufazmi.png" class="responsive-img circle " style="width:130px; border: 2px solid brown;" alt="">
                    <h5 class="center"><?php echo $_SESSION['name']; ?><i class="material-icons">check_circle</i></h5>
                    
                    <input type="submit" class="btn red" value="Follow" name="" id="">
                    <br> <br>
                    <div class="divider"></div>
                    <table>
                        <thead>
                            <tr>
                                <th>Followings</th>
                                <td>69</td>
                           
                                <th>Followers</th>
                                <td>569</td>
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
                            <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                            <span style="font-size: 10px; center">mufazmi</span>
                        </div>
                        <div class="col s2 m2 l2">
                                <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                                <span style="font-size: 10px; center">mufazmi</span>
                            </div>
                            <div class="col s2 m2 l2">
                                    <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                                    <span style="font-size: 10px; center">mufazmi</span>
                                </div>
                                <div class="col s2 m2 l2">
                                        <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                                        <span style="font-size: 10px; center">mufazmi</span>
                                    </div>
                                    <div class="col s2 m2 l2">
                                            <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                                            <span style="font-size: 10px; center">mufazmi</span>
                                        </div>
                                        <div class="col s2 m2 l2">
                                                <img src="img/mufazmi.png" style="width: 50px; border: 1px solid red; padding: 1px;;" class="responsive-img z-depth-1 circle" alt=""> <br>
                                                <span style="font-size: 10px; center">mufazmi</span>
                                            </div>
                    </div>
           <!-- **************************************POST SECTION************************************* -->
           
           <?php
                        // fetching posts content form database server
                        $query = "SELECT * FROM `posts` order by `post_id` desc";
                        $run = mysqli_query($con,$query);
                        while($data = mysqli_fetch_assoc($run)){
                        $post_id = $data['post_id'];
                        $content = $data['content'];
                        $image = $data['image'];
                        $from_user_id = $data['from_user_id'];
                    ?>
                <div class="card z-depth-0">
                    <div class="" style="">
                                        <div class="col s2 m2 l2 center">
                                                <?php
                                                    // fetching the name and profile pic of the post pulisher
                                                //     $query = "SELECT `name`, `image` FROM `users` WHERE `id` = '$from_user_id'";
                                                //     $run =  mysqli_query($con,$query);
                                                //    $data = mysqli_fetch_assoc($run);
                                                ?>
                                                <img src="img/mufazmi.png" style="width: 35px; margin-top:5px" class="left responsive-img circle" alt="">
                                            </div>
                                            <div class="col s8 m8 l8">
                                                <span class="left" style="margin-top: 10px; margin-left: -26px;"><?php echo $_SESSION['name']; ?></span>
                                            </div>
                                            <div class="col s2 m2 l2">
                                                <a href="#" data-target="post_dropdown" class="dropdown-trigger"> <i class="material-icons right"class=""style="margin-top: 13px; ">more_vert</i></a>
                                                <ul class="dropdown-content" id="post_dropdown">
                                                    <li>Edit</li>
                                                    <li>Delete</li>
                                                </ul>
                                            </div>

                    </div>
                            <img src="img/<?php echo $image; ?>" class="responsive-img"  alt="">
                            <div class="content">
                                <p>
                                    <?php echo $content; ?>>
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
                                        <a href=""><i class="material-icons" style=" transparent" onclick=" return sendLikes();" >favorite_border</i></a>
                                      
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
                                $username = $data['username'];
                                $image = $data['image'];
                                $user_id = $data['id'];
                            
                        ?>
                        <div class="col s4 m6 l4 center">
                            <div class="card center  z-depth-0 red lighten-4" style="border-radius: 20px;">
                                <a href="profile?u=<?php echo $username; ?>">
                                    <img src="img/<?php echo $image; ?>" alt="" class="responsive-img" style="border-radius: 20px 20px 0px 0px;">
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
<div class="footer-fixed">
        <footer>
<nav>
    <div class="nav-wrapper">
        <ul class="justify" style="display: table; margin: 0 auto;">
            <li style=" width: 85px;"><a href="index"><i class=" black-text material-icons">home</i></a></li>
            <li style=" width: 85px;"><a href="search"><i class="material-icons">search</i></a></li>
            <li style=" width: 85px;"><a href="camera"><i class="material-icons">add</i></a></li>
            <li style=" width: 85px;"><a href="notification"><i class="material-icons">favorite_border</i></a></li>
            <li><a href="profile"><i class="material-icons"><img src="img/mufazmi.png" style="width: 20px;" class="circle responsive-img" alt=""></i></a></li>
        </ul>
    </div>
</nav>
            </footer>
</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
    function sendLikes(){
        var post_id = document.getElementById('post_id').value;
        var sender_id =  document.getElementById('sender_id').value;
        $.ajax({
            type :"post",
            url : "sendlikes.php",
            data:{
                post_id :post_id,
                sender_id : sender_id
            },
        });
        return false;
    }
    </script>
    <script>
    $(document).ready(function(){
        $('.dropdown-trigger').dropdown();
    });
    </script>
  </body>
</html>