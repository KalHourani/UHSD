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
                            <h2 class="text-center text-white py-3 mt-1">User Profile</h2>
                    </div>

                    <?php 
                        RegisterFunc();
                    ?>

                    <div class="card-body text-center">

                        <form action="registerphp.php" method="POST" enctype="multipart/form-data"> 
                            <label class="btn btn-primary">
                               Upload Image <input type="file" style="display:none" name="image">
                            </label>
						<label for="firstname" class="float-left">Please fill out the following to complete your registration. Fields with an * are required.</label>
                        <div class="form-group">
                            <label for="firstname" class="float-left">Enter your first name *</label>
                            <input type="text" class="form-control" placeholder=" First Name " name="Fname" classname="form-control">
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="float-left">Enter your last name *</label>
                            <input type="text" class="form-control" placeholder=" Last Name " name="Lname" classname="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dob" class="float-left">Enter your Address *</label>
                            <input type="text" class="form-control" placeholder="Address 1" name="AddressField" classname="form-control">
							<input type="text" class="form-control" placeholder="Address 2" name="AddressField" classname="form-control">
							<input type="text" class="form-control" placeholder="City" name="AddressField" classname="form-control">
							<input type="text" class="form-control" placeholder="State" name="AddressField" classname="form-control">
							<input type="text" class="form-control" placeholder="Zipcode" name="AddressField" classname="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="float-left">Enter your email address</label>
                            <input type="email" class="form-control" placeholder=" Email  " name="email" classname="form-control">
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
