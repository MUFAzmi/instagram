<?php require_once('include/header.php'); ?>
 <!-- ***************************navbar code******************* -->

<!-- implemention :-  if we got username data from the get variable, then we will fetcht the the information using that variable and print there information on the profile.php  -->

<?php 
    if(isset($_GET['u'])){
        $username = htmlentities(mysqli_real_escape_string($con,$_GET['u']));
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);
        $name = htmlentities(mysqli_real_escape_string($con,$data['name'])); 
        $username = htmlentities(mysqli_real_escape_string($con,$data['username'])); 
        $email = htmlentities(mysqli_real_escape_string($con,$data['email'])); 
        $contact = htmlentities(mysqli_real_escape_string($con,$data['contact'])); 
        $gender = htmlentities(mysqli_real_escape_string($con,$data['gender'])); 
        $bio = htmlentities(mysqli_real_escape_string($con,$data['bio']));  
        $website = htmlentities(mysqli_real_escape_string($con,$data['website']));  
        $image = htmlentities(mysqli_real_escape_string($con,$data['image'])); 
        $id = htmlentities(mysqli_real_escape_string($con,$data['id'])); 
        $get_var_user_id = htmlentities(mysqli_real_escape_string($con,$data['id'])); 
        $user_id_from_username = htmlentities(mysqli_real_escape_string($con,$data['id'])); 
        $user_row = mysqli_num_rows($run);
        if($user_row < 1 ){
            ?>
                <div class="center"> <br><br> <br> <br>
                <img src="img/404.jpg" alt="" class="responsive-img " style="max-width:500px;">
                </div>
            <?php
            exit();
        }
        
    }
?>
<?php
    // ******************************Fetching the followers row**********************************
    if(isset($_GET['u'])){
        $to_user_id = htmlentities(mysqli_real_escape_string($con,$id));
        $query = "SELECT * FROM `follow` WHERE `from_user_id` = ' $session_id' AND `to_user_id` = '$to_user_id'";
        $run = mysqli_query ($con,$query);
        $followers_row = mysqli_num_rows($run);
    }
?>
<?php 
    // *******************************fetching followings counts*********************************
    if(isset($_GET['u'])){
        $username = htmlentities(mysqli_real_escape_string($con,$_GET['u']));
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);
        $id = htmlentities(mysqli_real_escape_string($con,$data['id']));
        $query = "SELECT * FROM `follow` WHERE `from_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $followings_count = mysqli_num_rows($run);
        $query = "SELECT * FROM `follow` WHERE `to_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $followers_count = mysqli_num_rows($run);
    }
    else{
        // Running the else condition:- if username variable not available on the URL means the logined user is viewing his profile, so we are fetching the followers count
        // using there id which is setted on the session, we are fethcing that user user information using session
        $id = $_SESSION['id'];
        $query = "SELECT * FROM `follow` WHERE `from_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $followings_count = mysqli_num_rows($run);
        $query = "SELECT * FROM `follow` WHERE `to_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $followers_count = mysqli_num_rows($run);
    }
?>

<?php 
    // *******************************Fetching Followings Counts******************************
    if(isset($_GET['u'])){
        $username = htmlentities(mysqli_real_escape_string($con, $_GET['u']));
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);
        $id = htmlentities(mysqli_real_escape_string($con,$data['id']));
        $query = "SELECT * FROM `posts` WHERE `from_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $post_count = mysqli_num_rows($run);
    }
    else{
        // running the else condition if username variable not avaiable in url, we are fetching the followings count of current logined user, using
        // there id which is setted on session, so here we are fetching their information using the session id
        $id = $_SESSION['id'];
        $query = "SELECT * FROM `posts` WHERE `from_user_id`='$id'";
        $run = mysqli_query($con,$query);
        $post_count = mysqli_num_rows($run);
    }
?>
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s5">
                        <span><?php echo $username; ?></span>
                    </div>
                    <div class="col s5"></div>
                    <div class="col s2 m1 l1">
                        <a href="" data-target="slide-out" class="sidenav-trigger show-on-large"> <i class="material-icons">menu</i> </a>
                    </div>
                </div>
            </nav>
</div>
        <ul class="sidenav" id="slide-out">
            <li>
                <div class="user-view">
                    <div class="background">
                        <a href=""><img src="images/1.jpg" alt="" class="responsive-img"></a>
                    </div>
                    <a href=""><img src="img/<?php if(isset($session_image) && !empty($session_image)){
                        echo $session_image;
                    }
                    else{
                        echo "user.png";
                    } ?>" 
                    alt="" class="circle responsive-img"></a>
                    <span class="name white-text"><?php echo $session_name; ?></span>
                    <span class="email white-text"><?php echo $session_email; ?></span>
                </div>
            </li>
            <li><a href="dashboard" class=""><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href=""><i class="material-icons">settings</i>Settings</a></li>
            <li><a href="logout"><i class="material-icons">logout</i>Logout</a></li>
            <div class="divider"></div>
            <li><a href="" class=""><i class="material-icons">call</i>Contact Us</a></li>
            <li><a href="about"><i class="material-icons">info</i>About Us</a></li>
        </ul>
<script>
    //  here we are using a javascript that will make the page content in editable form, to stop editable , you have to delete this code, or you can also change the value from true to fals.ss
</script>
<main>
    <!-- starting profile section code -->
    <div class="row" style="padding-top: 12px; font-size: 12px;">
        <div class="col s3"><a href=""><img src="img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>" style="width: 90px;" class="circle responsive-img" alt=""></a></div>
        <div style="padding-top: 22px;" class="col s3 center"><div class="col s6"><?php echo $post_count; ?> Posts</div></div>
        <div style="padding-top: 22px;" class="col s3 center"><div class="col s6"><a class="waves-effect waves-light modal-trigger" href="#followers"><?php echo $followers_count; ?> Followers</a></div></div>
        <div style="padding-top: 22px;" class="col s3 center"><div class="col s6"><a class="waves-effect waves-light modal-trigger" href="#followings"><?php echo $followings_count; ?> Followings</a></div></div>
    </div>
    <div class="row">
        <div class="col s12">
                 <b> <Span><?php echo $name; ?> <i class="material-icons tooltipped blue-text tiny" data-position="top" data-tooltip="Varified Account" style="cursor:pointer;">check_circle</i></Span></b> <br>
            <span class="red-text">Blogger</span> <br>
            <span><?php echo $bio; ?></span> <br>
            <a href="<?php echo $website; ?>"><?php echo $website; ?></a>
            <!-- implemention :- if a user visit on their own profile or any others, then a music will be play in background, -->
            <br>
                <div class="center">
                    <audio name="music" id="music"  autoplay src="music/bharosa.mp3"></audio>
                </div>
            </div>
    </div>
    <div class="row">
        <?php
            if(isset($_GET['u'])){
                if($followers_row < 1){
                    ?>
                        <form>
                            <input type="hidden" name="" id="to_user_id" value="<?php echo $id; ?>">
                            <div class="col s4"> <input type="submit" class="btn" onclick="return upf(); " id="follow" value="follow"> </div>
                        </form>
                    <?php
                 }
                 else {
                     ?>  
                        <form>
                            <input type="hidden" name="" id="sender_id" value="<?php echo $id; ?>">
                            <div class="col s4"> <input type="submit" class="btn" id="following" onclick="return unfollow();" value="following"> </div>
                        </form>
                        <?php
                 }
            }
        ?>
        <?php 
            if(isset($_GET['u'])){
                ?>
                
                <?php
            }
            else{
                ?>
                    <div class="col s4"> <a href="editprofile" class="btn">Edit Profile</a> </div>
                <?php
            }
        ?>
                <?php 
            if(isset($_GET['u'])){
                ?>
                        <div class="col s4"> <a href="chat?u=<?php echo $user_id_from_username; ?>" class="btn">Message</a> </div>
                <?php
            }
            else{
                ?>
                <?php
            }
        ?>
        <div class="col s4"> <input type="button" name="EditProfile" id="" class="btn" value="Email Add"> </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s4"><a href="#dashboard"><i class="material-icons">dashboard</i></a></li>
                <li class="tab col s4"><a href="#tv"><i class="material-icons">tv</i></a></li> 
                <li class="tab col s4"><a href="#tag"><i class="material-icons">tag</i></a></li>
            </ul>
        </div>

        <div class="col s12" id="dashboard">
            <div class="row">
            <?php
            if(isset($_GET['u'])){
                $username = htmlentities(mysqli_real_escape_string($con,$_GET['u'])); 
                $query = "SELECT * FROM `users` WHERE `username` = '$username'";
                $run = mysqli_query($con,$query);
                $data = mysqli_fetch_assoc($run);
                $userid = htmlentities(mysqli_real_escape_string($con,$data['id']));    
                $query = "SELECT * FROM `posts` WHERE `from_user_id`='$userid'";
                $run = mysqli_query($con,$query);
                // IMPLEMENTION :- if a user has not posted any data into the database sever, then a message will appear in a card into the screen to show or suggest
                // to post the data
                while($data = mysqli_fetch_assoc($run)){
                $image = htmlentities(mysqli_real_escape_string($con,$data['image']));
                $post_id = htmlentities(mysqli_real_escape_string($con,$data['post_id']));

            ?>
                <div class="col s4 m4 l4">
                    <a href="post/<?php echo $post_id; ?>"><img src="img/<?php echo $image; ?>" alt="" class="responsive-img"></a>
                </div>
                
        <?php }; 
            }
            else{
                
                $query = "SELECT * FROM `posts` WHERE `from_user_id`='$session_id'";
                $run = mysqli_query($con,$query);
                // IMPLEMENTION :- if a user has not posted any data into the database sever, then a message will appear in a card into the screen to show or suggest
                // to post the data
                while($data = mysqli_fetch_assoc($run)){
                $image = $data['image'];
            ?>
                <div class="col s4 m4 l4">
                    <a href=""><img src="img/<?php echo $image; ?>" alt="" class="responsive-img"></a>
                </div>
                
        <?php }; 
            }
            ?>     
        </div>
        <div class="col s12" id="tv">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dicta?</div>
        <div class="col s12" id="tag">
                <div class="row">
                    <div class="col s4 m4 l4">
                        <a href=""><img src="img/mufazmi.jpg" alt="" class="responsive-img"></a>
                    </div>
                    <div class="col s4 m4 l4">
                            <a href=""><img src="img/mufazmi.jpg" alt="" class="responsive-img"></a>
                            <img src="img/mufazmi.png" alt="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic optio earum ut laboriosam voluptates neque nostrum facere nihil ipsum repellat.</p>
                    </div>
                </div>
        </div>
    </div>
  <!-- ********************* Modal Structure for followers **********************-->
  <div id="followers" class="modal">
            <h5><b> &nbsp; Followers.</b></h5>
            <?php
            if(isset($_GET['u'])){
                require_once('include/header.php');
                $query = "SELECT * FROM `follow` WHERE  `to_user_id` = '$get_var_user_id' order by `id` desc";
                $run = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($run)){
                    $from_user_id = htmlentities(mysqli_real_escape_string($con,$data['from_user_id']));
                    $query1 = "SELECT * FROM `users` WHERE `id` = '$from_user_id'";
                    $run1 = mysqli_query($con,$query1);
                    while($data1 = mysqli_fetch_assoc($run1)){
                        $name = htmlentities(mysqli_real_escape_string($con,$data1['name'])); 
                        $image = htmlentities(mysqli_real_escape_string($con,$data1['image']));
                        $id = htmlentities(mysqli_real_escape_string($con,$data1['id']));
                        $username = htmlentities(mysqli_real_escape_string($con,$data1['username']));
                    
            ?> 
              
      <a href="<?php echo $username; ?>">
        <div class="card z-depth-0">
                <div class="row">
                    <div class="col s2 l2 m2">
                        <img src="img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>" alt="" class="responsive-img circle" style="max-width:50px;">
                    </div>
                    <div class="col s10 m10 l10" style="margin-top:8px; color:blue;">
                        <span class="black-text">
                            <b ><?php echo $name; ?></b>
                        </span>
                        <div class="" style="margin-top: 0px; color:blue;">
                            @<a href="<?php echo $username; ?>"><?php echo $username; ?></a>
                        </div>
                    </div>
                </div>
        </div>
      </a>
      <?php 
                    }   
                }
            }
            ?>

            <!-- if not exist any get varialbe into the url, fetch data using the session -->
                        <?php
            if(!isset($_GET['u'])){
                require_once('include/header.php');
                $query = "SELECT * FROM `follow` WHERE  `to_user_id` = '$session_id'";
                $run = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($run)){
                    $from_user_id = htmlentities(mysqli_real_escape_string($con,$data['from_user_id'])); ;
                    $query1 = "SELECT * FROM `users` WHERE `id` = '$from_user_id'";
                    $run1 = mysqli_query($con,$query1);
                    while($data1 = mysqli_fetch_assoc($run1)){
                        $name = htmlentities(mysqli_real_escape_string($con,$data1['name']));
                        $image = htmlentities(mysqli_real_escape_string($con,$data1['image']));
                        $id = htmlentities(mysqli_real_escape_string($con,$data1['id']));
                        $username = htmlentities(mysqli_real_escape_string($con,$data1['username']));
                    
            ?> 
              
      <a href="<?php echo $username; ?>">
        <div class="card z-depth-0">
                <div class="row">
                    <div class="col s2 l2 m2">
                        <img src="img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>" alt="" class="responsive-img circle" style="max-width:50px;">
                    </div>
                    <div class="col s10 m10 l10" style="margin-top:8px; color:blue;">
                        <span class="black-text">
                            <b ><?php echo $name; ?></b>
                        </span>
                        <div class="" style="margin-top: 0px; color:blue;">
                            @<a href="<?php echo $username; ?>"><?php echo $username; ?></a>
                        </div>
                    </div>
                </div>
        </div>
      </a>
      <?php 
                    }   
                }
            }
            ?>
  </div>
  <!--*********************** Modal Structure for followings ********************-->
  <div id="followings" class="modal">
        <h5><b> &nbsp; Followings.</b></h5>
    <?php
            if(isset($_GET['u'])){
                require_once('include/header.php');
                $query = "SELECT * FROM `follow` WHERE  `from_user_id` = '$get_var_user_id'";
                $run = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($run)){
                    $to_user_id = htmlentities(mysqli_real_escape_string($con, $data['to_user_id']));
                    $query1 = "SELECT * FROM `users` WHERE `id` = '$to_user_id'";
                    $run1 = mysqli_query($con,$query1);
                    while($data1 = mysqli_fetch_assoc($run1)){
                        $name = htmlentities(mysqli_real_escape_string($con, $data1['name']));
                        $image1 = htmlentities(mysqli_real_escape_string($con,$data1['image']));
                        $id = htmlentities(mysqli_real_escape_string($con,$data1['id']));
                        $username = htmlentities(mysqli_real_escape_string($con,$data1['username']));
                ?> 
        <a href="<?php echo $username; ?>">
            <div class="card z-depth-0">
                    <div class="row">
                        <div class="col s2 l2 m2">
                            <img src="img/<?php if(isset($image1) && !empty($image1)){echo $image1;} else{ echo "user.png";} ?>"" alt="" class="responsive-img circle" style="max-width:50px;">
                        </div>
                        <div class="col s10 m10 l10" style="margin-top:8px; color:blue;">
                            <span class="black-text">
                                <b ><?php echo $name; ?></b>
                            </span>
                            <div class="" style="margin-top: 0px; color:blue;">
                                @<a href="<?php echo $username; ?>"><?php echo $username; ?></a>
                            </div>
                        </div>
                    </div>
            </div>
        </a>
      <?php 
                    }   
                }
            }
            ?>
                        <!-- if not exist any get varialbe into the url, fetch data using the session -->
                        <?php
            if(!isset($_GET['u'])){
                require_once('include/header.php');
                $query = "SELECT * FROM `follow` WHERE  `from_user_id` = '$session_id'";
                $run = mysqli_query($con,$query);
                while($data = mysqli_fetch_assoc($run)){
                    $to_user_id = htmlentities(mysqli_real_escape_string($con,$data['to_user_id'])); ;
                    $query1 = "SELECT * FROM `users` WHERE `id` = '$to_user_id'";
                    $run1 = mysqli_query($con,$query1);
                    while($data1 = mysqli_fetch_assoc($run1)){
                        $name = htmlentities(mysqli_real_escape_string($con,$data1['name']));
                        $image = htmlentities(mysqli_real_escape_string($con,$data1['image']));
                        $id = htmlentities(mysqli_real_escape_string($con,$data1['id']));
                        $username = htmlentities(mysqli_real_escape_string($con,$data1['username']));
                ?>  
              
      <a href="<?php echo $username; ?>">
        <div class="card z-depth-0">
                <div class="row">
                    <div class="col s2 l2 m2">
                        <img src="img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>"" alt="" class="responsive-img circle" style="max-width:50px;">
                    </div>
                    <div class="col s10 m10 l10" style="margin-top:8px; color:blue;">
                        <span class="black-text">
                            <b ><?php echo $name; ?></b>
                        </span>
                        <div class="" style="margin-top: 0px; color:blue;">
                            @<a href="<?php echo $username; ?>"><?php echo $username; ?></a>
                        </div>
                    </div>
                </div>
        </div>
      </a>
      <?php 
                    }   
                }
            }
            ?>
  </div
</main>
  <body>
      
      <!-- *************************footer code**************************** -->
      <script>
      </script>
    <script type="text/javascript">
    function upf(){
    var to_user_id =document.getElementById('to_user_id').value;
    $.ajax({
            type:"post",
            url:"follow.php",
            data: 
            {  
                // the variable and the data name should be same here,, if !=
               'to_user_id' : to_user_id
            },
            });
            var elem = document.getElementById("follow");
                if (elem.value=="follow") elem.value = "Following";
                else elem.value = "FOLLOWING";
            return false;
     }
    </script>
    <script type="text/javascript">
        function unfollow(){
            var sender_id =document.getElementById('sender_id').value;
                $.ajax({
                        type:"post",
                        url:"unfollow.php",
                        data: 
                        {  
                            // the variable and the data name should be same here,, if !=
                        'sender_id' : sender_id
                        },
                        });
                        var elem = document.getElementById("following");
                            if (elem.value=="following") elem.value = "Follow";
                            else elem.value = "Follow";
                        return false;
                }
    </script>

<?php require_once('include/footer.php'); ?>