<?php
    require_once('includes/header.php');
    require_once('includes/connection.php');
    
    if(isset($_SESSION['ClientID']) || isset($_SESSION['admin']))
    {
        $_SESSION['GET'] = $GetID = $_GET['Success'];
        $query = "SELECT * FROM EMPLOYEE_DATA WHERE ID = '".$GetID."'";
        $result = mysqli_query($con, $query);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $ClientID = $row['ID'];
            $Fname = $row['fname'];
            $Lname = $row['lname'];
            $City = $row['city'];
            $State = $row['state'];
            $Address = $row['address'];
            $Address2 = $row['address2'];
            $Zipcode = $row['zipcode'];
        }
        
    }
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

<?php
    
    if(isset($_SESSION['admin']) || $_SESSION['GET'] == $_SESSION['ClientID'])
    {
        
        ?>

<div class="row">
    <div class="col-lg-3">
        <div class="card mt-3">
            <div class="card-title bg-info text-white py-2 rounded-top rounded-bottom">
                <h5 class="text-center mt-2"><?php echo $Fname." ".$Lname?> </h5>
            </div>
                <div class="card-body">
                    <div class="text-center">

                        <img src="data:image/jpg;base64,<?php echo base64_encode($Image);  ?>" width="200" height="200" class="img-thumbnail" />
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-9">
                <div class="card mt-3">
                    <table class="table table-dark table-hover">
                        <tr>
                            <th>Client ID</th>
                                <td><?php echo $ClientID ?></td>
                            </tr>
                        <tr>
                            <th>First Name</th>
                                <td><?php echo $Fname ?></td>
                            </tr>
                        <tr>
                            <th>Last Name</th>
                                <td><?php echo $Lname ?></td>
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

<?php
    }
    else
    {
        $Error = "Something is wrong";
        echo '<div class="alert alert-danger text-center">'.$Error.'</div>';
    }
    
    ?>
</div>
