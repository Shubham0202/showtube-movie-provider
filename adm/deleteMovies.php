<?php
include '../connect.php';

if(isset($_GET['deleteid']))
{
    $sr_no = $_GET['deleteid'];
    $sql="DELETE FROM `upload_data` WHERE `upload_data`.`sr_no` = $sr_no";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        // echo "Delete Sucessfully";
        header('location:showMovies.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>