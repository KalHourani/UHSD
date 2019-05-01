<?php 
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['login']))
    {
        if(empty($_POST['user']) || empty($_POST['pass']))
        {
            header("location:login.php?empty");
            exit();
        }
        else
        {
			$clientExist = false;
			$query = "SELECT * FROM LOGIN";
			$result = mysqli_query($con, $query);

			$User = $_POST['user'];
			$Pass = $_POST['pass'];

			echo "User: " . $User . "Pass: " . $Pass;

			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if($row['USERNAME'] == $User)
					{
						$Hash = password_verify($Pass, $row['PASSWORD_HASH']);

						if($Hash == false)
						{
							header("location:login.php?password_invalid");
							exit();
						}
						elseif ($Hash == true)
						{						
							$_SESSION['userID'] = $User;

							$query2 = "SELECT * FROM CLIENT";
							$result2 = mysqli_query($con, $query2);

							if(mysqli_num_rows($result2)>0)
							{
								while($row2 = mysqli_fetch_assoc($result2))
								{
									if($row2['ID'] == $User)
									{
										$clientExist = true;
                                        header("location:quote.php");
                                        exit();	
									}
								}
							}

							if($clientExist != true)
							{
								header("location:profile.php");
							}
						}
					}
				}
			}
        }
    }
	
?>