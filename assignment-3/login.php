<?php 
require_once('includes/header.php');
require_once('includes/function.php');
 ?>

    <div class="container">
        <div class="row">
            <div class="card mt-5 bg-dark h-100" style="width: 34rem;">
            <div>
                <img src="images/oilmockup.png" width="530" height="480" class="d-flex m-auto">
            </div>
        </div>
            <div class="col-lg-6 ml-auto">
                <div class="mt-5">
                    <img src="images/male.jpg" width="150" height="150" class="d-flex m-auto">     
                </div>
                    <div class="card mt-2">
                        <div class="card-title bg-secondary rounded-top rounded-bottom">
                            <h2 class="text-center text-white py-3 mt-1">Client Login</h2>
                    </div>

                    <?php
                        LoginFunc();
                    ?>

                    <div class="card-body text-center">
                        <form action="loginphp.php" method="POST">
                            <input type="text" placeholder=" Username " name="email" classname="form-control mb-5">
                            <input type="password" placeholder=" Password " name="password" classname="form-control mb-5">
                            <button class="btn btn-success mt-3" name="login">Login Now</button>
                            <div class="mt-2 small">
                            <a href="register.php" class="card-link">Don't have an account? Register Now</a>
                            </div>
                            <div class="mt-2 small">
                            <a href="admin_login.php" class="card-link">Admin Login</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<?php require_once('includes/footer.php'); ?>
