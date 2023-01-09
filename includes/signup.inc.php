<?php 

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $uid = $_POST["uid"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($name,$password,$uid,$email) !== false){
        header("location: /newForum/newForum/page2.php?error=emptyInput");
        exit();
    }
    if (invalidUid($uid) !== false) {
        header("location: /newForum/newForum/page2.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: /newForum/newForum/page2.php?error=invalidEmail");
        exit();
    }
    if (uidExists($conn,$uid, $email) !== false) {
        header("location: /newForum/newForum/page2.php?error=usertaken");
        exit();
    }


    createUser($conn,$name,$uid,$email,$password);

} 
else {
    header("location: /newForum/newForum/page2.php");
    exit();
}