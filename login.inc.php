<?php
if (isset($_POST["submit"])) {
    $username = #_POST["uname"];
    $pword = #_POST["pword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignin($username,$password) !== false){
        header("location: ../signin.php?error=emptyinput");
        exit(); 
    }

    signinUser($conn, $username, $password);
}
else {
    header("location: ../signin.php?");
    exit(); 
}