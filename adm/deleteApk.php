<?php
include '../connect.php';

if(isset($_GET['deleteid']))
{
    $sr_no = $_GET['deleteid'];
    $sql="DELETE FROM `modeapk` WHERE `modeapk`.`id` = $sr_no";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        // echo "Delete Sucessfully";
        header('location:showApk.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>