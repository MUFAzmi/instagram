<?php require_once('include/header.php'); ?>
<style>
    .chat {
        width: 100%;
    }

    .bubble{
        background-color: #F2F2F2;
        border-radius: 5px;
        box-shadow: 0 0 6px #B2B2B2;
        display: inline-block;
        padding: 10px 18px;
        position: relative;
        vertical-align: top;
    }

    .bubble::before {
        background-color: #F2F2F2;
        content: "\00a0";
        display: block;
        height: 16px;
        position: absolute;
        top: 11px;
        transform:             rotate( 29deg ) skew( -35deg );
            -moz-transform:    rotate( 29deg ) skew( -35deg );
            -ms-transform:     rotate( 29deg ) skew( -35deg );
            -o-transform:      rotate( 29deg ) skew( -35deg );
            -webkit-transform: rotate( 29deg ) skew( -35deg );
        width:  20px;
    }

    .me {
        float: left;   
        margin: 5px 145px 5px 20px;         
    }

    .me::before {
        box-shadow: -2px 2px 2px 0 rgba( 178, 178, 178, .4 );
        left: -9px;           
    }

    .you {
        float: right;    
        margin: 5px 20px 5px 145px;         
    }

    .you::before {
        box-shadow: 2px -2px 2px 0 rgba( 178, 178, 178, .4 );
        right: -9px;    
    }
</style>
<?php $get_to_user_id= htmlentities(mysqli_real_escape_string($con,$_GET['u'])); ?>
<?php
 $_SESSION['session_to_user_id'] =  $get_to_user_id;
//  ****************************** need to update if user id which we are getting from get method, if not exist in the database then kick out that person to message page*****************************************
?>
<?php
    // if user enterd the id for hacking our website or anythings else, if the get data not exist into our database, the we are kicking out him / her to the message page
    if(isset($_GET['u'])){
        $get_to_user_id = htmlentities(mysqli_real_escape_string($con,$_GET['u']));
        $query = "SELECT * FROM `users` WHERE `id` = '$get_to_user_id'";
        $run = mysqli_query($con,$query);
        $row = mysqli_num_rows($run);
        if($row < 1){
            header('LOCATION:message');
        }
    }
?>
<?php 
    if(isset($_GET['u'])){
        $username = htmlentities(mysqli_real_escape_string($con,$_GET['u']));
        $query = "SELECT * FROM `users` WHERE `id` = '$get_to_user_id'";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);
        $name = htmlentities(mysqli_real_escape_string($con,$data['name']));
        $username = htmlentities(mysqli_real_escape_string($con,$data['username']));
        $image = htmlentities(mysqli_real_escape_string($con,$data['image']));
        $id = htmlentities(mysqli_real_escape_string($con,$data['id']));
    }
    else{
        header('LOCATION:message');
    }
?>
 <!-- ***************************navbar code******************* -->
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s1 l1 m1 ">
                        <a href="message" class=" left"> <i class="material-icons">arrow_back</i> </a>
                    </div>
                    <a href="<?php echo $username; ?>">
                            <div class="col s2 m2 l2 left" style="margin-top: 10px;">
                                    <img src="img/<?php if(isset($image) && !empty($image)){ echo $image; } else { echo "user.png"; } ?>" alt="" style="width: 35px;" class="responsive-img circle">
                                
                                </div>
                                <div class="col s6 m6 l6 left">
                                    <div class="" style="margin-top: -8px;">
                                        <?php echo $name; ?>
                                    </div>
                                    <div class="blue-text" style="margin-top: -40px;">Active Yesteday </div>
                                </div>
                    </a>
                    <div class="col s1 m1 l1">
                            <a href="" class=""> <i class="material-icons">video_call</i> </a>
                        </div>
                    <div class="col s1 m1 l1">
                            <a href="" class=""> <i class="material-icons">flag</i> </a>
                        </div>
                    <div class="col s1 m1 l1">
                        <a href="" class=""> <i class="material-icons">info</i> </a>
                    </div>
                </div>
            </nav>
</div>
<main>
<div id="show"></div>
</main>

  <body>
<div id="show" style="padding-bottom:60px;"></div>
      <!-- *************************footer code**************************** -->
        <div class="footer-fixed">
        <footer>
<nav>
    <div class="nav-wrapper">
        <form method="post">
            <div class="row">
                <div class="col s1 m1 l1">
                    <i class="material-icons">camera_alt</i>
                </div>
                <div class="col s8 l8 m8">
                    <input type="text" name="chat_message" id="chat_message" placeholder="Message...">
                    <input type="hidden" name="sender_id" id="sender_id" value = "<?php echo $session_id; ?>">
                    <input type="hidden" name="reciever_id" id="reciever_id" value="<?php echo $get_to_user_id; ?>">
                    <button onclick="return post();" style="position: absolute; width: 1px; height: 1px; left: -9999px; "></button>
                    
                </div>
                <div class="col s1 m1 l1">
                    <i class="material-icons">mic</i>
                </div>
                <div class="col s1 m1 l1">
                    <i class="material-icons">image</i>
                </div>
                <div class="col s1 m1 l1">
                    <i class="material-icons">add</i>
                </div>
            </div>
        </form>
    </div>
</nav>
            </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="http://mufazmi/whatsapp/js/jquery-3.3.1.min.js"></script>
    </script>
    <script type="text/javascript">
    function post(){
    var chat_message = document.getElementById('chat_message').value;
    var sender_id =document.getElementById('sender_id').value;
    var reciever_id = document.getElementById('reciever_id').value;
    $.ajax({
            type:"post",
            url:"sendchat.php",
            data: 
            {  
                // the variable and the data name should be same here,, if !=
               'chat_message' : chat_message,
               'sender_id' : sender_id,
               'reciever_id' : reciever_id
            },
            });
            return false;
     }
    </script>
    <!-- pushing on server in every single second -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function () {
            $('#show').load('rcv_chats.php')
        }, 500);
        });
    </script>
  </body>
</html>