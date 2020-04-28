<?php require_once('include/header.php'); ?>
<?php
    if(isset($_POST['update'])){
        $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
        $username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
        $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $contact = htmlentities(mysqli_real_escape_string($con,$_POST['contact']));
        $gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
        $bio = htmlentities(mysqli_real_escape_string($con,$_POST['bio'])); 
        $website =  $_POST['website'];
        $query =  "UPDATE `users` SET  `name` = '$name', `username` = '$username', `email` = '$email', `contact`='$contact',`gender`='$gender', `bio` = '$bio', `website` = '$website' WHERE `id`='$session_id'";
        $run = mysqli_query($con, $query);
        if($run)
        {
            $_SESSION['profile_updated'] = "Profile Updated";
            $profile_updated =  $_SESSION['profile_updated'];
        }
        else{
            $_SESSION['profile_updated_failed'] = "Failed To Update Profile";
            $profile_updated_failed = $_SESSION['profile_updated_failed'];
        }
    }
?>
 <!-- ***************************navbar code******************* -->
 <form action="" method="POST">
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s1">
                        <a href="profile"><i class="material-icons">clear</i></a>
                    </div>
                    <div class="col s9">
                        <span>Edit Profile</span>
                    </div>
                    <div class="col s2 m2 l2 center">
                        <button type="submit" class="btn z-depth-0 btn-floating" name="update" id="update" > <i class="material-icons">done</i></button>
                    </div>
                </div>
            </nav>
</div>
<main>
    <div class="container">
            <div class="center"><br>
                <img src="img/<?php echo $image; ?>" alt="" class="responsive-img circle" style="width: 90px;"> <br>
                <a href="">Change Profile Photo</a>
        </div>
        <div class="center">
            <h5 class="red-text">
                <?php
                    if(isset($profile_updated)){
                        echo $profile_updated;
                    }
                ?>
                <?php
                    if(isset($profile_updated_failed)){
                        echo $profile_updated_failed;
                    }
                ?>
            </h5>
        </div>
        <div class="input-field">
            <input type="text" value="<?php echo $name; ?>" name="name" id="name">
            <label for="name">Name</label>
        </div>
        <div class="input-field">
            <input type="text" value="<?php echo $username; ?>" name="username" id="username">
            <label for="username">Username</label>
        </div>
        <div class="input-field">
            <input type="text" value="<?php echo $website; ?>" name="website" id="website">
            <label for="website">Website</label>
        </div>
        <div class="input-field">
            <input type="text" value="<?php echo $bio; ?>" name="bio" id="bio">
            <label for="bio">Bio</label>
        </div>
        <div class="divider"></div>
        <b>Profile Inrformation</b>
        <div class="input-field">
            <input type="text" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email Address">
            <label for="email">Email Address </label>
        </div>
        <div class="input-field">
            <input type="text" value="<?php echo $contact; ?>" name="contact" id="contact" placeholder="Enter Your Phone Number">
            <label for="contact">Phone Number</label>
        </div>
        <select name="gender" id="gender">
            <option  value="<?php echo $gender; ?>"> <?php echo $gender; ?></option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="custom">Custom</option>
        </select>
    </div>
    </form>
</main>
  <body>
      
      <!-- *************************footer code**************************** -->
<div class="footer-fixed">
    <footer>
        <nav>
            <div class="nav-wrapper">
                <ul class="justify" style="display: table; margin: 0 auto;">
                    <li style=" width: 85px;"><a href="index"><i class="material-icons">home</i></a></li>
                    <li style=" width: 85px;"><a href="search"><i class="material-icons">search</i></a></li>
                    <li style=" width: 85px;"><a href="camera"><i class="material-icons">add</i></a></li>
                    <li style=" width: 85px;"><a href="notification"><i class="material-icons">favorite_border</i></a></li>
                    <li><a href="profile"><i class="material-icons"><img src="img/<?php echo $session_image; ?>" style="width: 20px; border: 1px solid black;" class="circle responsive-img" alt=""></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="materialize.min.js"></script>
    <script>  
  $(document).ready(function(){
    $('.tabs').tabs();
    $('select').formSelect();
  });
  </script>
  </body>
</html>