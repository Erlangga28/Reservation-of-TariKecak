<?php

require_once 'connection.php';
require_once 'function.data.php';

if(isset($_POST['custname']) && isset($_POST['Password']) )
{	
    $id = $_POST["custname"];
    $password = $_POST["Password"];

    if (emptyInputLogin($id, $password ) !== false ){
        header("location: ../login.php?error=emptyInput");
        exit();
     }
     else {
        loginUser($conn,$id,$password);

     }
   
}
else {
    header("location: ../index.php");
    exit();
}