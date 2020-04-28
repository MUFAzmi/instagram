
<form >
    <input type="text" name="" id="from_user_id"> 
    <input type="text" name="" id="to_post_id">
    <input type="submit" value = "Send Likes" onclick="return sendLikes();" name="" id="">
</form>

<script>
    function sendLikes(){
        var sender_id = document.getElementById('from_user_id').value;
        var post_id = document.getElementById('to_post_id').value;
        $.ajax({
            type:"post",
            url:"sendlike.php",
            data:
            {
                sender_id:from_user_id,
                to_post_id:post_id
            },
        });
    }
</script>
<script src="js/jquery.min.js"></script>