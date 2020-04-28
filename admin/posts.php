<?php require_once('include/header.php'); ?>

<?php 
    if(isset($_GET['edit'])){
    $edit_post =  $_GET['edit'];
    $query = "SELECT * FROM `blog_posts` WHERE `blog_post_id` =  '$edit_post'";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
    $get_blog_title = $data['blog_post_title'];
    $blog_content =  $data['blog_post_content'];
}
?>

<?php
    // inserting blog contents to the database server
if(isset($_POST['post'])){
    $post_title = mysqli_real_escape_string($con,(htmlentities($_POST['post_title'])));
    $post_content = mysqli_real_escape_string($con,(htmlentities($_POST['content'])));
    $query = "INSERT INTO `blog_posts` (`blog_post_title`,`blog_post_content`) VALUES ('$post_title','$post_content')";
    $run = mysqli_query($con,$query);
    if($run){
        $_SESSION['posted'] = "Your Post Has Been Published";
    }
    else{
        $_SESSION['post_failed'] = "An Unknown Error Occoured During Pulishing Your Content, Please Try Again, If The Problem Persist Please Cotact To The Website Developer.";
    }
}
?>

<?php
    // updating posts to the database server
if(isset($_POST['update'])){
    $post_title = mysqli_real_escape_string($con,(htmlentities($_POST['post_title'])));
    $post_content = mysqli_real_escape_string($con,(htmlentities($_POST['content'])));
    $blog_post_id = mysqli_real_escape_string($con,(htmlentities($_POST['blog_post_id'])));
    $query = "UPDATE `blog_posts` SET `blog_post_title` = '$post_title' , `blog_post_content` = '$post_content' WHERE `blog_post_id` = $blog_post_id";
    $run = mysqli_query($con,$query);
    if($run){
        $_SESSION['updated'] = "Your Post Has Been Updated";
    }
    else{
        $_SESSION['update_failed'] = "An Unknown Error Occoured During Pulishing Your Content, Please Try Again, If The Problem Persist Please Cotact To The Website Developer.";
    }
}
?>

    <main>
        </main>
    <body class=" blue lighten-5 mufazmi" >
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">Social Codia</a>
                    <a href="#" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
        <form action="" method="post">
          <div class="container"> <br><br>
            <div class="status">
                <h5 class="red-text center">
                    <?php
                        if(isset($_SESSION['posted'])){
                            echo $_SESSION['posted'];
                            session_destroy();
                        }
                        if(isset($_SESSION['updated'])){
                            echo $_SESSION['updated'];
                            session_destroy();
                        }
                    ?>
                    <span style="font-size:15px; font-weight=bold;">
                        <?php
                            if(isset($_SESSION['post_failed'])){
                            echo $_SESSION['post_failed'];
                            session_destroy(); // this session will destroy the all session as well users's login session.
                            // when their session destroyed then they will automatically redirect to the login page
                        }
                        if(isset($_SESSION['update_failed'])){
                        echo $_SESSION['update_failed'];
                        session_destroy(); // this session will destroy the all session as well users's login session.
                        // when their session destroyed then they will automatically redirect to the login page
                    }
                    ?>
                    </span>
                </h5>
            </div>
            <div class="input-field">
              <input type="text" value="<?php if(isset($_GET['edit'])){ echo $get_blog_title;}?>" name="post_title" id="post_title">
              <label for="post_title">Enter The Post Title</label>
              <?php
                if(isset($_GET['edit'])){ ?>
                    <input type="hidden" name="blog_post_id" id="blog_post_id" value="<?php echo $edit_post; ?>">
              <?php  }
              ?>
            </div>
            <div class="input-field">
              <textarea id="" cols="30" rows="10" name="content" class="materialize-textarea" placeholder="Enter Your Post's Contents.." style="height: 300px; "><?php if(isset($_GET['edit'])){ echo $blog_content; }?></textarea>
            </div>
            <div class="input-field">
              <input type="submit" name="<?php if(isset($_GET['edit'])){ echo "update"; } else { echo "post"; }?>" value="<?php if(isset($_GET['edit'])){ echo "update"; } else { echo "post"; }?>" id="post" class="btn btn-large" style="width: 100% ;">
            </div>
          </div>
        </form>
        <!-- **************************The navbar menu collection list******************************* -->
        <?php require_once('include/sidenav.php'); ?>
                
        <script>
            //Sending reacts data to the database server without refreshing the page using the ajax system
            function reactsType(){
                var sender_id = document.getElementById['from_user_id'].value;
                var rec_id = document.getElementById('to_user_id').value;
                
            }
        </script>

        <?php require_once('include/footer.php'); ?>