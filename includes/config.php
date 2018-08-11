<?php 
    ob_start(); //Turns on output buffering
    $timezone = date_default_timezone_set("America/Chicago");
    $con = mysqli_connect("localhost", "root", "","dhun");

    if(mysqli_connect_errno()){
        echo "Failed to connect db ".mysqli_connect_errno();
    }
?>