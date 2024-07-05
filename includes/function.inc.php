<?php
function emptyInputSignup($username,$email,$sex,$number,$password,$password2){
    $result:
    if(empty($username) || empty($email) || empty($sex) || empty($number) || empty($password) || empty($password2)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
} 
