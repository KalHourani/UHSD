<?php 
    require_once('includes/connection.php');
    if(isset($_POST['register']))
    {
		$Uname = $_POST['Uname'];
		$Password = $_POST['password'];
		$Email = $_POST['email'];

		$HashPass = password_hash($Password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO LOGIN (USERNAME, PASSWORD_HASH,EMAIL) VALUES ('$Uname', '$HashPass', '$Email')";

		if ($con->query($sql) === TRUE) {
			echo "New record created successfully";
		}else{
			echo "Error: " . $sql . "<br>" . $con->error;
		}

		header("location:login.php");
    }

	if(1 == 0)
	{
        $Ext = explode('.', $Image);
        $TrueExt = (strtolower(end($Ext)));
        
        $FirstName = mysqli_real_escape_string($con, $_POST['Fname']);
        $City = mysqli_real_escape_string($con, $_POST['city']);
        $State = mysqli_real_escape_string($con, $_POST['state']);
        $Address1 = mysqli_real_escape_string($con, $_POST['address1']);
        $Address2 = mysqli_real_escape_string($con, $_POST['address2']);
        $Username = mysqli_real_escape_string($con, $_POST['username']);
		$Password = mysqli_real_escape_string($con, $_POST['password']);
		
        echo $FirstName." ".$LastName." ".$DOB." ".$City." ".$Email." ".$Username." ".$Password;

        if(empty($FirstName) || empty($City) || empty($State) || empty($Address1) || empty($Address2) || empty($Username) || empty($Password))
        {
            header("location: register.php?Empty");
            exit();
        }
        else
        {
            if (!preg_match("/^[a-z, A-Z]*$/",$FirstName) || !preg_match("/^[a-z, A-Z]*$/",$UserName))
			{
				header("location: register.php?characters");
				exit();
			}
			else
			{
				$query = "SELECT * FROM Employee_Data WHERE Uname='".$Username."'";
				$result = mysqli_query($con, $query);

				if(mysqli_fetch_assoc($result))
				{
					header("location: register.php?UserTaken");
					exit();
				}
				else 
				{
						// We hash the passwords for security 
						$HashPass = password_hash($Password, PASSWORD_DEFAULT);
						date_default_timezone_get("America/Chicago"); // since Texas is in CST
						$date = date("d/m/Y");
				}
				if(in_array($TrueExt))
				{
                            
					if($size < 1000000)
					{
						$query = "INSERT INTO CLIENT (ID, FNAME, CITY, STATE, ADDRESS, ADDRESS2, ZIPCODE) VALUES ('$ID','$FirstName', '$City', '$State', '$Address1', '$Address2', '$ZipCode')";
						$result = mysqli_query($con, $query);
						move_uploaded_file($Temp, $Target);
						header("location: register.php?Success");
						exit();
					}
					else
					{
						header("location: register.php?Too_Large");
						exit();
					}
				}
				else
				{
					header("location: register.php?Invalid_Format");
					exit();
				}
				
			} 
        }
    }
?>
