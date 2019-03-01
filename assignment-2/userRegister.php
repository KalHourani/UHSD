<?php 
require_once('includes/header.php'); 
require_once('includes/function.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="mt-5">
                    <img src="images/male.jpg" width="150" height="150" class="d-flex m-auto">     
                </div>
                    <div class="card mt-2">
                        <div class="card-title bg-secondary rounded-top rounded-bottom">
                            <h2 class="text-center text-white py-3 mt-1">Registration</h2>
                    </div>

                    <?php 
                        RegisterFunc();
                    ?>

                    <div class="card-body text-center">

                        <form action="registerphp.php" method="POST" enctype="multipart/form-data"> 
                            <label class="btn btn-primary">
                               Upload Image <input type="file" style="display:none" name="image">
                            </label>
						<div class="form-group">
                            <label for="email" class="float-left">Enter your email address</label>
                            <input type="email" class="form-control" placeholder=" Email  " name="email" classname="form-control">
                        </div>	
                        <div class="form-group">
                            <label for="username" class="float-left">Create a username</label>
                            <input type="text" class="form-control" placeholder=" User Name " name="Uname" classname="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="float-left">Create a password</label>
                            <input type="password" class="form-control" placeholder=" Password  " name="password" classname="form-control">
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-success mt-3" name="register">Register Now</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<?php require_once('includes/footer.php'); ?> 
