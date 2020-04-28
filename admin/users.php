<?php require_once('include/header.php'); ?>
<?php
// fetching all users details from the database server.
    $query = "SELECT * FROM `users`";
    $run = mysqli_query($con,$query);
?>

    <main>
        </main>
    <body class="mufazmi blue lighten-5" >
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">Social Codia</a>
                    <a href="#" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
        <div class="">
            <div class="row">
              <table>
                <tr>
                  <th>
                    Image
                  </th>
                  <th>
                    Username
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Contact
                  </th>
                  <th>
                    Action
                  </th>
                </tr> 
                <?php 
                        while($data = mysqli_fetch_assoc($run)){
                            $image = $data['image'];
                            $name = $data['name'];
                            $username = $data['username'];
                            $email = $data['email'];
                            $contact = $data['contact'];
                            $gender = $data['gender'];
                            $users_id = $data['id'];
                    ?>
                <tr>
                  <td>                    
                    <img src="../img/<?php if(isset($image) && !empty($image)){echo $image;} else{ echo "user.png";} ?>" alt="" class="responsive-img circle" style="width: 60px;">
                  </td>
                  <td>
                  <?php echo $username; ?><i style="cursor:pointer;" class="material-icons blue-text tiny tooltipped" data-position="top" data-tooltip="Varfied Account">check_circle</i>
                  </td>
                  <td>
                  <?php echo $name;?>
                  </td>
                  <td>
                  <?php echo $email; ?>
                  </td>
                  <td>
                  <?php if(isset($contact) && !empty($contact)){echo $contact;} else {echo "No Contact";} ?>
                  </td>
                  <td>
                    <a href=""><i class="material-icons">edit</i></a>
                    <a href=""><i class="material-icons red-text">delete</i></a>
                  </td>
                </tr>
                <?php
                    }
                ?>
              </table>
            </div>
          </div>
        <!-- **************************The navbar menu collection list******************************* -->
        <?php require_once('include/sidenav.php'); ?>


        <?php require_once('include/footer.php'); ?>