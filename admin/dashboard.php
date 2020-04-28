<?php require_once('include/header.php'); ?>

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

        <!-- **************************The navbar menu collection list******************************* -->
        <?php require_once('include/sidenav.php'); ?>
        <div class="row">
            <div class="col l3 s12 m4">
                <div class="card">
                    <div class="card-content blue lighten-3 white-text">
                        <h3><b><?php echo $user_counts; ?></b></h3>
                        <p><b>Users</b></p>
                    </div>
                    <div class="card-action center blue lighten-2">
                        <a href="users.html">More Information</a>
                    </div>
                </div>
            </div>
            <div class="col l3 s12 m4">
                    <div class="card">
                        <div class="card-content blue lighten-3 white-text">
                            <h3><b><?php echo $posts_counts; ?></b></h3>
                            <p><b>Posts</b></p>
                        </div>
                        <div class="card-action center blue lighten-2">
                            <a href="">More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col l3 s12 m4">
                        <div class="card">
                            <div class="card-content blue lighten-3 white-text">
                                <h3><b>65</b></h3>
                                <p><b>Flagged Posts</b></p>
                            </div>
                            <div class="card-action center blue lighten-2">
                                <a href="">More Information</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 s12 m4">
                            <div class="card">
                                <div class="card-content blue lighten-3 white-text">
                                    <h3><b>125</b></h3>
                                    <p><b>Verification Requests</b></p>
                                </div>
                                <div class="card-action center blue lighten-2">
                                    <a href="">More Information</a>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="row">
            <div class="col s6 l6 m6">
                <div class="card-panel z-depth-0">
                    <h5>Recent Activities</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dolore quidem dicta minima quaerat odit modi illo sunt ducimus aliquam quisquam, accusantium possimus distinctio ratione corporis deserunt amet eum rerum mollitia expedita nobis cupiditate. Repudiandae consequatur adipisci quisquam sunt ab minima, consectetur, eaque cum blanditiis a debitis itaque enim quia obcaecati laborum eum ea ipsum maxime sequi eos accusantium. Omnis dolor enim vero aut suscipit nam optio ratione deleniti, error placeat numquam et provident earum perferendis nostrum est qui. Modi corporis blanditiis sequi voluptates veritatis officiis minus officia facilis beatae dolore illo, molestiae nostrum accusamus qui eaque quisquam vel incidunt?</p>
                </div>
            </div>
            <div class="col s6 l6 m6">
                    <div class="card-panel z-depth-0">
                        <h5>Recent Complaintes</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dolore quidem dicta minima quaerat odit modi illo sunt ducimus aliquam quisquam, accusantium possimus distinctio ratione corporis deserunt amet eum rerum mollitia expedita nobis cupiditate. Repudiandae consequatur adipisci quisquam sunt ab minima, consectetur, eaque cum blanditiis a debitis itaque enim quia obcaecati laborum eum ea ipsum maxime sequi eos accusantium. Omnis dolor enim vero aut suscipit nam optio ratione deleniti, error placeat numquam et provident earum perferendis nostrum est qui. Modi corporis blanditiis sequi voluptates veritatis officiis minus officia facilis beatae dolore illo, molestiae nostrum accusamus qui eaque quisquam vel incidunt?</p>
                    </div>
                </div>
        </div>

        <?php require_once('include/footer.php'); ?>