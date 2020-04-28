<?php require_once('include/header.php'); ?>
 <!-- ***************************navbar code******************* -->
 <?php
    if(isset($_POST['post'])){
        $from_user_id = $_SESSION['id'];
        $image_name = $_FILES['image']['name'];
        $temp_image_name =  $_FILES['image']['tmp_name'];
        $content = htmlentities(mysqli_real_escape_string($con,$_POST['content']));
        move_uploaded_file($temp_image_name,"img/$image_name");
        $query ="INSERT INTO `posts` (`from_user_id`, `content`, `image`) VALUE ('$from_user_id','$content','$image_name')";
        $run = mysqli_query($con,$query);
    }
 ?>
<div class="navbar-fixed">
            <nav>
                <div class="row">
                    <div class="col s1">
                        <a href="profile"><i class="material-icons">clear</i></a>
                    </div>
                    <div class="col s9">
                        <span>Gallary</span>
                    </div>
                    <div class="col s2 m2 l2 center">
                        <button type="submit" class="btn z-depth-0 btn-floating" name="post" id="post" > <i class="material-icons">post</i></button>
                    </div>
                </div>
            </nav>
</div>
<main>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input-field file-field" style="height:200px; hieght:200px; ">
            <input type="file" name="image" class="dropify" data-show-remove="false" required>
        </div>
        <div class="input-field"> 
            <img src="img/<?php if(isset($session_image) && !empty($session_image)){echo $session_image;} else {echo "user.png";} ?>" alt="" class="responsive-img circle prefix" style="width:45px; margin-top:20px; margin-left:5px;">
            <textarea id="" cols="30" rows="10" name="content" class="materialize-textarea" placeholder="What's on your mind?" style="height: 124px; padding-left: 20px; padding-top: 15px; border-bottom: none;"></textarea>
        </div> 
        <div class="input-field">
            <input type="submit" name="post" id="post" value="post" style="width:100%;" class="btn btn-large">
        </div>
    </form>
</main>
  <body>
      <!-- *************************footer code**************************** -->
<?php require_once('include/footer.php'); ?>