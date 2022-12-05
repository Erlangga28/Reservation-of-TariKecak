<?php
require('connection.php');
?>

<!DOCTYPE HTML>  
<html>
<head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy ticket</title>

</head>
<body>  

<form method="post" action="reservation.php"
    <div class="form-group">
        <label for="name">Name</label>
        <input name="Name" type="text" class="form-control" id="name" placeholder="Name" required>

        <button type="submit" name="Buy Ticket" value="Buy Ticket" class="btn btn-dark">Buy</button>
    </div>  
</form>


<?php

if(isset($_POST['buyticket'])) {
    $name=$_POST['Name'];

    $sql="insert into mppl.ticket (Name) values ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Registration Successful')</script>";
        header('location:Homepage.php');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('User Exists')</script>";
        }
}
?>

</body>
</html>