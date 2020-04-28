<div class="footer-fixed">
    <footer>
        <nav>
            <div class="nav-wrapper">
                <ul class="justify" style="display: table; margin: 0 auto;">
                    <li style=" width: 85px;"><a href="dashboard"><i class="material-icons">home</i></a></li>
                    <li style=" width: 85px;"><a href="search"><i class="material-icons">search</i></a></li>
                    <li style=" width: 85px;"><a href="add"><i class="material-icons">add</i></a></li>
                    <li style=" width: 85px;"><a href="notification"><i class="material-icons">favorite_border</i></a></li>
                    <li><a href="profile"><i class="material-icons"><img src="img/<?php if(isset($session_image) && !empty($session_image)){echo $session_image;} else{ echo "user.png";} ?>"" style="width: 20px; border: 1px solid black;" class="circle responsive-img" alt=""></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="materialize.min.js"></script>
    <script>  
  $(document).ready(function(){
    $('.tabs').tabs();
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav({
        edge : 'right',
    });
    $('.tooltipped').tooltip();
  });
  </script>
  <script src="dist/js/dropify.min.js"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

  </body>
</html>