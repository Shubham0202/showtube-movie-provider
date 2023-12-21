<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'movieapp';


$con = new mysqli($localhost,$username,$password,$database);
if (!$con) {
    // echo "Didn't connect with database";
    die(mysqli_error($con));
}




?>