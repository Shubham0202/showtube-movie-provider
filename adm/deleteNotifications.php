<?php
include '../connect.php';
$id = $_GET['deleteid'];
echo $id;

$sql = "DELETE FROM `notifications` WHERE id = $id";
$result = mysqli_query($con,$sql);
if($result)
header('location:showNotification.php');
?>