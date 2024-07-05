<?php
$servername = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "try";

// now i create connection to the databases
$conn = mysqli_connect("$servername","$dbusername","$dbpassword","$dbname");

// check for connection
if(!$conn){
    die ("could'nt connect".mysqli_connect_error());
}

// its better to open php tegs withought closing b'se if you close it will establish an error