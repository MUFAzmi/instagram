<?php 
session_start();
require_once('include/dbcon.php');
$session_to_user_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['session_to_user_id'])) ;
$session_id = $_SESSION['id'];
// fetching chat message of sender
$query = "SELECT * FROM `chat_message` WHERE `from_user_id`='$session_id' AND `to_user_id` = '$session_to_user_id' order by `chat_message_id` asc ";
// fetching chat message of reciever
$query1 ="SELECT * FROM `chat_message` WHERE `from_user_id`='$session_to_user_id' AND `to_user_id` = '$session_id' order by `chat_message_id` asc ";
$run = mysqli_query ($con,$query);
$run1 = mysqli_query($con,$query1);
while($data = mysqli_fetch_assoc($run) AND $data1 = mysqli_fetch_assoc($run1)){
    $chat_message = htmlentities(mysqli_real_escape_string($con,)) $data['chat_message'];
    $chat_message1 = htmlentities(mysqli_real_escape_string($con,)) $data1['chat_message'];
    ?>
    <p>

        <div class="chat">
            <div class="bubble you black-text">
            <?php                  
                   print_r($chat_message);
                 ?>
            </div>

            <div class="bubble me black-text">
                 <?php
                 echo $chat_message1;
                 ?>
            </div>
        </div>
    </p>
<?php 
}
?>
<!-- 
need to add an implemention: aik hi bubble me print karna hai order by post_id se.. aur ek condition lagana hai ki agar from_user_id session ki
id se match karta hai to us msg ko right hand side print karo.. 
but sala dono from aur to ki id ke data ko hi database server se fetch karna hai na....
to apni query bhi sahi hai aur while condition bhi sahi chal rha hai.. phir sala mistake kya hai????????????????
  -->