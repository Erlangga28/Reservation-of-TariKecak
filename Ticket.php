<?php
require('connection.php');
?>
<style>
<?php include 'Styling.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Of Tari Kecak</title>
    <link rel = "stylesheet" type ="text/css" href="Styling.css">
</head>
    <body>
        <header>
            <div class="Menu" style="background-color: whitesmoke;">
                <ul>
                    <img src="Tarikecak-logo.png">
                </ul>
            </div>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="HomePage.html"> Home </a>
                <a href="Shop.html">Custome</a>
                <a href="Ticket.php"> Tickets </a>
                <a href="#">About</a>
            </div>
          
            <button class="openbtn" onclick="openNav()">☰</button>
            <script>
                function openNav() {
                    document.getElementById("mySidepanel").style.width = "300px";
                }
          
                function closeNav() {
                    document.getElementById("mySidepanel").style.width = "0";
                }
            </script>
        </header>


    <form action="Ticket.php" method="post">
        <div class="elem-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="visitor_name" placeholder="Name" required>
        </div>
        <div class="elem-group">
          <label for="email">Your E-mail</label>
          <input type="email" id="email" name="Email" placeholder="Erlangga.Wahyu@email.com" required>
        </div>
        <div class="elem-group">
          <label for="phone">Your Phone</label>
          <input type="tel" id="phone" name="Phone" placeholder="08*****" required>
        </div>
        <div class="elem-group inlined">
          <label for="ticket">Tickets</label>
          <input type="number" id="AmountofTickets" name="total_ticket" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
          <label for="date">Date</label>
          <input type="date" id="date" name="Date" required>
        </div>
        <div class="elem-group">
        <button type="submit" name="save" value="Buy">Book The Tickets</button>
              </div>
      </form>
    </body>
    <?php
    if(isset($_POST['save']))
    { 
         $Name = $_POST['name'];
         $Email = $_POST['email'];
         $Phone = $_POST['phone'];
         $Ticket = $_POST['ticket'];
         $Date = $_POST['date'];

         $sql_query="insert into tiket (Name,Email,Phone,Ticket,Date) values ('$Name','$Email','$Phone','$Ticket','$Date')";
    
         if (mysqli_query($conn, $sql_query)) 
         {
            echo "New Details Entry inserted successfully !";
         } 
         else
         {
            echo "Error: " . $sql . "" . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        ?>
</html>
