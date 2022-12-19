<?php
   require_once 'connection.php';
   require_once 'function.data.php';
if(isset($_POST['submit']))
{	
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (getOrder($email )){
        header("location: ../find.php?error=no order");
        exit();
        if ($resultcheck > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['ticketselect'] . "<br>";
            }
         }
     }

}
