<?php
require('data/connection.php');

$email=$_GET['id1'];

$name=$_GET['id2'];

$sql="DELETE from buyticket where custname='$name' and custemail='$email'";

if($conn->query($sql) === TRUE) {
// 	$sql1="INSERT into message (custname,Msg,Date,Time) values ('$name','Your request for issue of custname: $email  has been rejected',curdate(),curtime())";
//  $result=$conn->query($sql1);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=book.php", true, 303);

}

?>