<?php
include('data/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING DETAILS</title>
</head>

<body>
<?php
			$sql = "SELECT * FROM buyticket";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				echo "name: " . $row["custname"]. " - email: " . $row["custemail"]. " ticket:" . $row["ticketselect"]. "<br>";
			  }
			} else {
			  echo "0 results";
			}
			$conn->close();
			?>
    
</body>
</html>
