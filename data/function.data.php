<?php
include('connection.php');

function emptyInputTicket($name ,$date, $notes, $email, $ticket){
    $result;
    if (empty($name) ||empty($date) ||  empty($notes) ||  empty($email) || empty($ticket) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;

    
}

function invalidTicket($ticket){
    $result;
    if (!preg_match("/^[1-4]*$/", $ticket)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function createBuyticket($conn,$name,$date,$notes, $email,$ticket){
    $sql= "INSERT INTO buyticket (custname,datebuy,custnotes,custemail,ticketselect) VALUE (? ,?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../buyticket.php?error=stmtfailed");
        exit();
    }

    
    mysqli_stmt_bind_param($stmt,"sssss",$name, $date, $notes, $email, $ticket );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../buyticket.php?error=none");
    exit();
}

function emptyInputLogin($id, $password){
    $result;
    if (empty($id) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

