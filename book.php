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
<table class="table mt-5 table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email </th>
                                <th scope="col">Ticket</th>
                            </tr>
                        </thead>

                        <tbody>
<?php
			$sql = "SELECT * FROM buyticket";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				$name= $row['custname'];
				$email= $row['custemail'];
				$ticket= $row['ticketselect'];
			  }
			} else {
			  echo "0 results";
			}
			$conn->close();
			?>
			<tr>
                                    <td><?php echo strtoupper($name) ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><b><?php echo $ticket ?></b></td>
                                    <td>
                                        <center>
                                            <?php
                                            if ($ticket > 0) {
                                                echo "<a href=\"accept.php?id1=" . $email . "&id2=" . $name . "\" class=\"btn btn-success\">Accept</a>";
                                            }
                                            ?>
                                            <a href="reject.php?id1=<?php echo $email ?>&id2=<?php echo $name ?>" class="btn btn-danger">Reject</a>
                                        </center>
                                    </td>
                                </tr>
			</tbody>
		</table>
    
</body>
</html>
