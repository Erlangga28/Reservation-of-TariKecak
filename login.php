<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation of tari Kecak</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <div class="my-4">
                    <h1>Login</h1>
                </div>
                <form action="login.php" method="post">
                    <div class="form-group mb-4">
                        <label for="username">username</label>
                        <input name="id"type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Password">Password</label>
                        <input name="Password" type="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <button type="submit" name="signin" value="Sign In" class="btn btn-dark">Login</button>
                </form>
            </div>
         </div>
    </div>

    <?php
        if(isset($_POST['signin']))
        {
            $u=$_POST['id'];
            $p=$_POST['Password'];

            $sql="select * from fpmppl.admin where id='$u'";
        
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $x=$row['Password'];

            if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
            {
                echo "Login Successful";
                 $_SESSION['id']=$u;
        
                if($y=='Admin')
                header('location:admin/index.php');       
            }
            else 
            { 
            echo "<script type='text/javascript'>alert('Failed to Login! Incorrect')</script>";
            }
    }
    ?>

</body>
</html>