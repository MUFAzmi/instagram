     <!-- **************************************POST SECTION************************************* -->
     <?php
session_start();
require_once('include/dbcon.php');
// chekking the session if user is not login means the session not setted if session not setted means user not login, here we are checking
// the session, if setted the n user can access the private page, if not setted then user can't access the private page
if(isset($_SESSION['id'])){
}
else{
    header("location:../login");
}
?>
<?php $session_id =  $_SESSION['id']; ?>
<?php
// Fetching the user data using the session id
$session_id =  $_SESSION['id'];
$query =  "SELECT * FROM `users` WHERE `id` =  $session_id";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
$name = $data['name'];
$session_name = $data['name'];
$username = $data['username'];
$email = $data['email'];
$session_email = $data['email'];
$contact = $data['contact'];
$gender = $data['gender'];
$bio =  $data['bio'];
$website =  $data['website'];
$image = $data['image'];
$session_image = $image;
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../dist/css/dropify.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<style>
 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;

  }
  .footer-fixed {
	position: fixed;
	bottom: 0;
	width: 100%;
  }

</style>
     <?php
        if(isset($_GET['p'])){

        }
        else{
            header("location:index.php");
        }
     ?>
           
     <?php
                        // fetching posts content form database server using get post id 
                        $get_p_id = htmlentities(mysqli_real_escape_string($con,$_GET['p']));
                        $query = "SELECT * FROM `posts` WHERE `post_id` = '$get_p_id'";
                        $run = mysqli_query($con,$query);
                        while($data = mysqli_fetch_assoc($run)){
                        $content = htmlentities(mysqli_real_escape_string($con,$data['content']));
                        $image = htmlentities(mysqli_real_escape_string($con,$data['image'])); 
                    ?>
                <div class="card z-depth-1">
                    <div class="" style="">
                                        <div class="col s2 m2 l2 center">
                                                <img src="../img/mufazmi.png" style="width: 35px; margin-top:5px" class="left responsive-img circle" alt="">
                                            </div>
                                            <div class="col s8 m8 l8">
                                                <span class="left" style="margin-top: 10px; margin-bottom:15px;"><?php echo $_SESSION['name']; ?></span>
                                            </div>
                                            <div class="col s2 m2 l2">
                                                <a href="#" data-target="post_dropdown" class="dropdown-trigger"> <i class="material-icons right"class=""style="margin-top: 13px; ">more_vert</i></a>
                                                <ul class="dropdown-content" id="post_dropdown">
                                                    <li>Edit</li>
                                                    <li>Delete</li>
                                                </ul>
                                            </div>
                    </div>
                            <img src="../img/<?php echo $image; ?>" class="responsive-img"  alt="">
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
            </body>
            <div class="footer-fixed">
    <footer>
        <nav>
            <div class="nav-wrapper">
                <ul class="justify" style="display: table; margin: 0 auto;">
                    <li style=" width: 85px;"><a href="dashboard"><i class="material-icons">home</i></a></li>
                    <li style=" width: 85px;"><a href="search"><i class="material-icons">search</i></a></li>
                    <li style=" width: 85px;"><a href="add"><i class="material-icons">add</i></a></li>
                    <li style=" width: 85px;"><a href="notification"><i class="material-icons">favorite_border</i></a></li>
                    <li><a href="profile"><i class="material-icons"><img src="img/<?php if(isset($session_image) && !empty($session_image)){echo $session_image;} else{ echo "user.png";} ?>"" style="width: 20px; border: 1px solid black;" class="circle responsive-img" alt=""></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../materialize.min.js"></script>
    <script>  
  $(document).ready(function(){
    $('.tabs').tabs();
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav({
        edge : 'right',
    });
    $('.tooltipped').tooltip();
  });
  </script>
  <script src="../dist/js/dropify.min.js"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

  </body>
</html>