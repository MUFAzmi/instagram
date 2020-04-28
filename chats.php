<?php require_once('include/header.php'); ?>
<?php $get_to_user_id= $_GET['u']; ?>
 <!-- ***************************navbar code******************* -->
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s1 l1 m1 ">
                        <a href="message" class=" left"> <i class="material-icons">arrow_back</i> </a>
                    </div>
                    <a href="profile">
                            <div class="col s2 m2 l2 left" style="margin-top: 10px;">
                                    <img src="img/mufazmi.png" alt="" style="width: 35px;" class="responsive-img circle">
                                
                                </div>
                                <div class="col s6 m6 l6 left">
                                    <div class="" style="margin-top: -8px;">
                                        Umair Farooqui
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
 
        
</main>
  <body>
      


    <form >
    <input type="" name="name" id="name">
    <input type="" name="descr" id="descr">
    <input type="" name="to" id="to" value="<?php echo $_GET['u']; ?>">
    <input type="submit" name="" class="btn" value="submit" onclick="return post();">
    </form>
    <p id="msg"></p>
      <!-- *************************footer code**************************** -->
<div class="footer-fixed">
        <footer>

            </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="http://mufazmi/whatsapp/js/jquery-3.3.1.min.js"></script>
    <script>
// sending chat_message to database server withour reffreshing the page using the ajax system 
<script src="http://mufazmi/whatsapp/js/jquery-3.3.1.min.js"></script>
    </script>
    <script type="text/javascript">
    function post(){
    var name=document.getElementById('name').value;
    var descr=document.getElementById('descr').value;
    var to = document.getElementById('to').value;
    $.ajax({
            type:"post",
            url:"sendchat.php",
            data: 
            {  
               'name' :name,
               'descr' :descr,
               'to' :to
            },
            });
            return false;
     }
    </script>
  </body>
</html>