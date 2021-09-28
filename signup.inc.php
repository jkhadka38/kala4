<?php

if(isset($_POST["signup_submit"])) {

    $fullname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["pword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($email,$fname,$password) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit(); 
    }

    if(invalidEmail($email) !==false){
        header("location: ../signup.php?error=invalidemali");
        exit(); 
    }

    if(invalidUname($fullname) !==false){
        header("location: ../signup.php?error=invalidfname");
        exit(); 
    }

    createUser($conn, $fname, $email, $password);

}
else{
    header("location: ../signup.php");
    exit(); 
}





