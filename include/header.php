<?php
session_start();
require_once('include/dbcon.php');
// chekking the session if user is not login means the session not setted if session not setted means user not login, here we are checking
// the session, if setted the n user can access the private page, if not setted then user can't access the private page
if(isset($_SESSION['id'])){
}
else{
    header("location:login");
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="dist/css/dropify.min.css">
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