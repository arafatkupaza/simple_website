<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    
    // i connect with file of databases
    require_once 'dbh.inc.php';
    require_once 'finction.inc.php';

    if(emptyInputSignup($username,$email,$sex,$number,$password,$password2) !== false){
        header("location: ../sign.php=emptyinpute");
        exit();
    }
    if(validUsername($username) !== false){
        header("location: ../sign.php=validUsername");
        exit();
    }
    if(validEmail($email) !== false){
        header("location: ../sign.php=valideEmail");
        exit();
    }
    if(validSex($sex) !== false){
        header("location: ../sign.php=validsex");
        exit();
    }
    if(validNumber($number) !== false){
        header("location: ../sign.php=validNumber");
        exit();
    }
    if($password != $password2){
        header("location: ../sign.php=passworddontmatch");
        exit();
    }

    // if user name is oleady exist
    if(usernameExist($conn, $username)){
        header("location: ../sign.php=Usernametaken");
        exit();
    }
}else{
    header("location: ../sign.php");
    exit();
}