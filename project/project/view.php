<?php
    require_once('includes/header.php');
    require_once('includes/connection.php');
    
    //if(isset($_SESSION['Client']) || isset($_SESSION['client']))
    //{
        //$_SESSION['GET'] = $GetID = $_GET['Success'];

        $GetID = $_SESSION['userID'];
        $query = "SELECT * FROM CLIENT;";
        $result = mysqli_query($con, $query);
        
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($row['ID'] == $GetID)
				{
					$ClientID = $row['ID'];
					$Fname = $row['FNAME'];
					$City = $row['CITY'];
					$State = $row['STATE'];
					$Address = $row['ADDRESS'];
					$Address2 = $row['ADDRESS2'];
					$Zipcode = $row['ZIPCODE'];
				}
			}
		}
        
    //}
    require_once('includes/footer.php');
    ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white mt-3">
                <h4 class="text-center py-3 mt-2">Personal Profile</h4>
            </div>
        </div>
    </div>

//<?php
  //  
    //if(isset($_SESSION['client']) || $_SESSION['GET'] == $_SESSION['ClientID'])
    //{
        
      //  ?>
		
<div class="row">
    <div class="col-lg-3">
        <div class="card mt-3">
            <div class="card-title bg-info text-white py-2 rounded-top rounded-bottom">
                <h5 class="text-center mt-2"><?php echo $Fname?> </h5>
            </div>
               
            </div>
        </div>
            <div class="col-lg-9">
                <div class="card mt-3">
                    <table class="table table-dark table-hover">
                        <tr>
                            <th>Client ID</th>
                                <td><?php echo $ClientID?></td>
                            </tr>
                        <tr>
                            <th>First Name</th>
                                <td><?php echo $Fname ?></td>
                            </tr>
						<tr>
                            <th>City</th>
                                <td><?php echo $City ?></td>
                            </tr>
                        <tr>
                            <th>State</th>
                                <td><?php echo $State ?></td>
                            </tr>
                        <tr>
                            <th>Address</th>
                                <td><?php echo $Address ?></td>
                            </tr>
						<tr>
                            <th>Address 2</th>
                                <td><?php echo $Address2 ?></td>
                            </tr>	
                        <tr>
                            <th>Zipcode</th>
                                <td><?php echo $Zipcode ?></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>

//<?php
    //}
  //  else
    //{
      //  $Error = "Something is wrong";
        //echo '<div class="alert alert-danger text-center">'.$Error.'</div>';
    //}
    
    //?>
</div>
