<?php
require('data/connection.php');

$email=$_GET['id1'];
$name=$_GET['id2'];

$sql="SELECT custname from buyticket where custname='$name'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$name=$row['custname'];

if($name == 'custname')
{$sql1="UPDATE record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 60 day),Renewals_left=1 where custemail='$email' and custname='$name'";
 
if($conn->query($sql1) === TRUE)
{$sql3="UPDATE buyticket set Ticket=Ticket-1 where custemail='$email'";
 $result=$conn->query($sql3);
//  $sql5="INSERT into message (RollNo,Msg,Date,Time) values ('$name','Your request for issue of BookId: $email  has been accepted',curdate(),curtime())";
//  $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=book.php", true, 303);

}
}





?>