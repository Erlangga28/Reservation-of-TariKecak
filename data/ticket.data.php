<?php
if(isset($_POST['submit']))
{	
    $name = $_POST["name"];
    $date = $_POST["date"];
    $notes = $_POST["notes"];
    $email = $_POST["email"];
    $ticket = $_POST["ticket"];

    require_once 'connection.php';
    require_once 'function.data.php';

    if ( emptyInputTicket($name,$date,$notes,$email,$ticket) !== false ){
        header("location: ../buyticket.php?error=emptyInput");
        exit();
     }
    if (invalidTicket($ticket) !== false ){
        header("location: ../buyticket.php?error=InvalidTicket");
        exit();
     } 

    createBuyticket($conn,$name,$date,$notes,$email,$ticket);


}
else{
    header("location: ../buyticket.php");
    exit();
 }
