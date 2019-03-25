<?php 

    // register function
    function RegisterFunc()
    {
            $Message= "";

            if(isset($_GET['Empty']))
                {
                    $Message = "Please fill in the blanks"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['characters']))
                {
                    $Message = "Please enter valid characters"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['ValidEmail']))
                {
                    $Message = "Please enter a valid email address"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['User Taken']))
                {
                    $Message = "Username is already taken"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['Email Taken']))
                {
                    $Message = "Email is already taken"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['Invalid_Format']))
                {
                    $Message = "Invalid image format"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['Too_Large']))
                {
                    $Message = "Image too large"; 
                    echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
                }

            if(isset($_GET['Success']))
                {
                    $Message = "You have successfully made an account!"; 
                    echo '<div class="alert alert-success text-center">'.$Message.'
                    <a href="login.php">Login Now</a>
                    </div>';
                }
            return $Message;
    }

    // login function
    function LoginFunc()
    {
        $Message = "";

        if(isset($_GET['empty']))
        {
            $Message = "Please enter your information in the blanks."; 
            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
        }

        if(isset($_GET['invalid']))
        {
            $Message = "The Username is invalid"; 
            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
        }

        if(isset($_GET['password_invalid']))
        {
            $Message = "This Username and Password combination is invalid"; 
            echo '<div class="alert alert-danger text-center">'.$Message.'</div>';
        }

        if(isset($_SESSION['EmployeeID']))
        {
            header('location:index.php');
        }
        return $Message;
    }

?>