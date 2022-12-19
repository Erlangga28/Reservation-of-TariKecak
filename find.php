<?php
include('data/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
	"width=device-width,initial-scale=1.0">

	<!-- CSS only -->
	<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
		integrity=
"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
		crossorigin="anonymous" rel="stylesheet">

	<!-- Html2Pdf -->
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"
		integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A=="
		crossorigin="anonymous">
	</script>

	<style>
		.heading{
		text-align: center;
		color: #2F8D46;
		}
	</style>
</head>

<body>
	<h2 class="heading">
	GeeksForGeeks
	</h2>

	<!-- Form encrypted as text -->
	<form action="find.php"method="post">
			<div>
                <label class="text-white dark:text-gray-200" for="name">Name</label>
                <input name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
		<div>
		<label class="text-white dark:text-gray-200" for="email">Email Address</label>
                <input name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

			<button type="submit" name= "submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">submit</button>

	</form>
		<?php
			$sql = "SELECT custname, custemail, ticketselect FROM buyticket";
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

	
				
	<script>		
		// Function to GeneratePdf
		function GeneratePdf() {
			var element = document.getElementById('form-print');
			html2pdf(element);
		}
	</script>

	<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
		crossorigin="anonymous">
	</script>
</body>

</html>
