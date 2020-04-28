<?php
session_start();
require_once('include/dbcon.php');

// Checkig the session if user already logined then he can not access the login page again

if(isset($_SESSION['id'])){
    header('location:dashboard');
}
// Login Code

if(isset($_POST['uf'])){
    $umair = htmlentities(mysqli_real_escape_string($con,$_POST['umair']));
    $firdos = htmlentities(mysqli_real_escape_string($con,$_POST['firdos']));
    $query = "SELECT * FROM `users` WHERE `email` = '$umair' AND `password` = '$firdos'";
    $run = mysqli_query($con, $query);
    $row =  mysqli_num_rows($run);
    if($row < 1){
        echo " <script> alert('Username or Password Wrong'); </script>".mysqli_error($con);
    }
    else{
        $data =  mysqli_fetch_assoc($run);
        $_SESSION['id'] = htmlentities(mysqli_real_escape_string($con,$data['id']));
        $_SESSION['name'] = htmlentities(mysqli_real_escape_string($con,$data['name']));
        header("LOCATION:dashboard");
    }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <div class="center container row">
        <div class="col s10 m8 l6 offset-l3 offset-m2 offset-s1">
                <br><br><br><br><br><br>
                <h1>Instagram</h1>
                <form action="" method="post">
                        <div class="input-filed">
                                <input type="text" value="info.mufazmi@gmail.com" name="umair" id="" placeholder=" &nbsp;Phone number, email address or username" style="border: 1px solid black; border-radius: 5px;">
                        </div>
                        <div class="input-field">
                            <input type="password" value="farooqui" name="firdos" id="" placeholder="&nbsp; Password" style="border: 1px solid black; border-radius: 5px;">
                        </div>
                        <input type="submit" name="uf" id="login" value="Login" class="btn" style="width: 100%;">        
                </form>
                <div class="center">
                    <span class="brown-text small">Forgotten Your Login Details?</span>
                    <a href="">Get help with signing in.</a>
                </div>
                <br><br><br><br><br><br>
                <div class="">
                    <span>Don't Have an account?</span>
                    <a href="signup">Sign up.</a>
                </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript" src="materialize.min.js"></script>
  </body>
</html>