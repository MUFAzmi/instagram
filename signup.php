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
        <div class="col l6 m6 s10  offset-l3 offset-s1 offset-m3">
                <br><br><br><br><br><br>
                <h1><i class="material-icons large">person</i></h1>
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s6">
                            <a href="#phone">
                                <span>Phone Number</span>
                            </a>
                        </li>
                        <li class="tab col s6">
                            <a href="#email">
                                <span>
                                    EMAIL ADDRESS
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="phone">
                    <form action="" method="post">
                        <div class="input-filed">
                                <input type="text" name="email" id="" placeholder=" &nbsp;Phone number" style="border: 1px solid black; border-radius: 5px;">
                        </div>
                        <input type="submit" name="login" id="login" value="Next" class="btn" style="width: 100%;">        
                </form>
                </div>
                <div id="email">
                    <form action="" method="post">
                        <div class="input-filed">
                                <input type="text" name="email" id="" placeholder=" &nbsp;Email address" style="border: 1px solid black; border-radius: 5px;">
                        </div>
                        <input type="submit" name="login" id="login" value="Next" class="btn" style="width: 100%;">        
                </form>
                </div>
                <br><br><br><br><br><br>
                <div class="">
                    <span>Already have an account?</span>
                    <a href="login">Log in.</a>
                </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="materialize.min.js"></script>
    <SCript>
      $(document).ready(function(){
    $('.tabs').tabs();
  });
    </SCript>
  </body>
</html>