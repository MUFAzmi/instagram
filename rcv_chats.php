<?php 
session_start();
require_once('include/dbcon.php');
$session_to_user_id =  htmlentities(mysqli_real_escape_string($con,$_SESSION['session_to_user_id']));
$session_id = htmlentities(mysqli_real_escape_string($con,$_SESSION['id'])) ;
// fetching chat message of sender and receiver both.
$query = "SELECT * FROM `chat_message` WHERE (`from_user_id`='$session_id' AND `to_user_id` = '$session_to_user_id') || (`from_user_id`='$session_to_user_id' AND `to_user_id` = '$session_id') order by `chat_message_id` asc ";
$run = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($run)){
    $chat_message = htmlentities(mysqli_real_escape_string($con,$data['chat_message'])) ;
    $from_user_id = htmlentities(mysqli_real_escape_string($con,$data['from_user_id'])) ;
    $to_user_id = htmlentities(mysqli_real_escape_string($con,$data['to_user_id'])) ;
    ?>
    <p>

        <div class="chat">
        <?php if($from_user_id == $session_id){ ?>
            <div class="bubble you black-text" style="margin-left:200px;">
            <?php                  
                    echo $chat_message;
                 ?>
            </div>
       <?php } ?>

       <?php if($from_user_id !== $session_id){ ?>
            <div class="bubble me black-text " style="margin-right:200px;">
            <?php                  
                    echo $chat_message;
                 ?>
            </div>
       <?php } ?>
        </div>
    </p>
<?php 
}
?>
    <script>
    // Disc : - script that push page to button every signle time whenever new message appear or not appear,
    // CAUTION : - User can't read the privius message, coz they can't scroll the page to up.
    // IDEA :-  set the current count of the message and store them in a variable, use a condtion if count changed, then push page to the bottom.
    // :- But how is this possible, coz this page is reffreshing at 500ms.
        var scrollingElement = (document.scrollingElement || document.body);
        scrollingElement.scrollTop = scrollingElement.scrollHeight;
    </script>

    <?php

    ?>