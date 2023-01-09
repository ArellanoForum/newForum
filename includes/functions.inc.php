<?php

function emptyInputLogin($name,$password,$uid,$email){
 $result = false;
 if(empty($name) || empty($password) || empty($uid) || empty($email)){
    $result = true;
    echo 'Please put something inside the boxes';
 }
 else{
    $result = false;
}
return $result;
}

function invalidUid($uid){
    $result=false;
    if(!preg_match("/^[a-zA-Z0-9] *$/", $uid)){
       $result = true;
    }
    else{
       $result = false;
   }
   return $result;
   }

   function invalidEmail($email){
    $result=false;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       $result = true;
    }
    else{
       $result = false;
   }
   return $result;
   }

function uidExists($conn, $uid, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: /newForum/newForum/page2.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);


    mysqli_stmt_close($stmt);}
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    
    function createUser($conn, $name, $uid, $email, $password)
    {
        $sql = "INSERT INTO users(usersId,usersUid,usersPwd,usersNames,usersEmail) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: /newForum/newForum/page2.php?error=stmtFailed");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $uid, $password, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /newForum/newForum/page2.php?error=none");
        exit();
    }
}