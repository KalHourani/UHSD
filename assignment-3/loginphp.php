<?php 
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['login']))
    {
        if(empty($_POST['ID']) || empty($_POST['password']))
        {
            header("location:login.php?empty");
            exit();
        }
        else
        {
            $User = mysqli_real_escape_string($con, $_POST['ID']);
            $Pass = mysqli_real_escape_string($con, $_POST['password']);

            $query = "SELECT * FROM EMPLOYEE_DATA WHERE ClientID = '".$ID."'";
            $result = mysqli_query($con, $query);

            if($row = mysqli_fetch_assoc($result))
            {
                // dehash password
                $Hash = password_verify($Pass, $row['password']);

                if($Hash == false)
                {
                    header("location:login.php?password_invalid");
                    exit();
                }
                elseif ($Hash == true)
                {
                    $_SESSION['ClientID'] = $row['ID'];
                    $ClientID = $row['ID'];
                    header("location:view.php?Success=$ClientID");
                }
            }
            else
            {
                header("location:login.php?invalid");
                exit();
            }
        }
    }
    else
    {
        header("location:login.php");
        exit();
    }



?>