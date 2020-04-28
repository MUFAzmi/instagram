<?php require_once('include/header.php'); ?>
 <!-- ***************************navbar code******************* -->
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s1 l1 m1 ">
                        <a href="dashboard" class=" left"> <i class="material-icons">arrow_back</i> </a>
                    </div>
                    <div class="col s9 m9 l9">
                        <h5>Direct</h5>
                    </div>
                    <div class="col s1 m1 l1">
                            <a href="" class=""> <i class="material-icons">format_list_bulleted</i> </a>
                        </div>
                    <div class="col s1 m1 l1">
                        <a href="" class=""> <i class="material-icons">create</i> </a>
                    </div>
                </div>
            </nav>
</div>
<main>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">search</i> 
                <input type="text" name="" id="" placeholder="Search" style="border: 1px solid brown ; border-radius: 10px;" >
            </div>
        </div>
    </div>

    <?php
        //  fetching all user data to print their infomation to chat with her / him.
        $query = "SELECT * FROM `users`";
        $run =  mysqli_query($con,$query);
        while($data =  mysqli_fetch_assoc($run)){
            $name = htmlentities(mysqli_real_escape_string($con,$data['name'])); 
            $user_id = htmlentities(mysqli_real_escape_string($con,$data['id']));  
            $image = htmlentities(mysqli_real_escape_string($con,$data['image'])); 
        
    ?>

    <div class="row">
        <a href="chat?u=<?php echo $user_id; ?>">
                <div class="col s2 m2 l2">
                        <img src="img/<?php if(isset($image) && !empty($image)){ echo $image;} else { echo "user.png";} ?>" alt="" class="responsive-img circle" style="width: 50px; margin-left: 10px;">
                    </div>
                    <div class="col s10 l10 m10">
                        <span style="margin-top: 100px;"><?php echo $name; ?></span>
                        <div class="red-text">Lorem ipsum dolor sit amet.</div>
                    </div>
        </a>
    </div>
       <?php } ?> 
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
            <li style=" width: 85px;"><a href="add"><i class="material-icons">add</i></a></li>
            <li style=" width: 85px;"><a href="notification"><i class="material-icons">favorite_border</i></a></li>
            <li><a href="profile"><i class="material-icons"><img src="img/<?php if(isset($session_image) && !empty($session_image)) {echo $session_image;} else{echo "user.png";} ?>" style="width: 20px;" class="circle responsive-img" alt=""></i></a></li>
        </ul>
    </div>
</nav>
            </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>