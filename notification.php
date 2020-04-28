<?php require_once('include/header.php'); ?>
 <!-- ***************************navbar code******************* -->
<div class="navbar-fixed">
        <nav>
                <div class="row">
                    <div class="col s12 l12 m12">
                        <span>&nbsp; &nbsp; Activity</span>
                    </div>
                </div>
            </nav>
</div>
<main>

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
            <li style=" width: 85px;"><a href="notification"><i class=" black-text material-icons">favorite</i></a></li>
            <li><a href="profile"><i class="material-icons"><img src="img/<?php if(isset($session_image) && !empty($session_image)){echo $session_image;} else{ echo "user.png";} ?>" style="width: 20px;" class="circle responsive-img" alt=""></i></a></li>
        </ul>
    </div>
</nav>
            </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>