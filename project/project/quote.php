<html>
<head>
<title>Fuel Quote</title>
</head>
<body>

<?php
	require_once('includes/connection.php');
	require_once('includes/header.php');
	$sql = "SELECT * FROM QUOTE";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
	$ClientId = $_SESSION['userID'];
	if ($resultCheck > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			if ($row['CLIENT_ID'] == $ClientId)
			{
				$gallons_requested = $row['GALLONS_REQUESTED'];
				$address = $row['ADDRESS'];
				$delivery_date = $row['DELIVERY_DATE'];
				$suggested_price = $row['SUGGESTED_PRICE'];
				$total_amount_due = $row['TOTAL_AMOUNT_DUE'];
				echo"<div class=\"col-lg-9\">
							<div class=\"card mt-3\">
								<table class=\"table table-dark table-hover\">
									<tr>
										<th>Gallons Requested</th>
											<td>$gallons_requested</td>
										</tr>
									<tr>
										<th>Address</th>
											<td>$address</td>
										</tr>
									<tr>
										<th>Delivery Date</th>
											<td>$delivery_date</td>
										</tr>
									<tr>
										<th>Suggested Price</th>
											<td>$suggested_price</td>
										</tr>
									<tr>
										<th>Total Amount Due</th>
											<td>$total_amount_due</td>
										</tr>
								</table>
							</div>
						</div>
					</div>";
					break;
			}
		}
	}

	$sql = "SELECT * FROM HISTORY";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			if ($row['CLIENT_ID'] == $ClientId)
			{
				$company = $row['COMPANY'];
				$gallons_requested = $row['GALLONS_REQUESTED'];
				$address = $row['ADDRESS'];
				$delivery_date = $row['DELIVERY_DATE'];
				$suggested_price = $row['SUGGESTED_PRICE'];
				$total_amount_due = $row['TOTAL_AMOUNT_DUE'];
				echo "<div class=\"col-lg-9\">
				<div class=\"card mt-3\">
					<table class=\"table table-dark table-hover\">
						<tr>
							<th>Gallons Requested</th>
								<td>$gallons_requested</td>
							</tr>
						<tr>
							<th>Address</th>
								<td>$address</td>
							</tr>
						<tr>
							<th>Delivery Date</th>
								<td>$delivery_date</td>
							</tr>
						<tr>
							<th>Suggested Price</th>
								<td>$suggested_price</td>
							</tr>
						<tr>
							<th>Total Amount Due</th>
								<td>$total_amount_due</td>
							</tr>
					</table>
				</div>
			</div>
		</div>";
			}
		}
	}

?>

</body>
</html>