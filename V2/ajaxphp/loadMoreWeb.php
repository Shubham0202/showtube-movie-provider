<?php
include '../connect.php';
$search_value = $_POST['search'];


$sql = 'SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC LIMIT ' . $search_value;
include '../components/sqlWebResult.php';
sqlWebResult($sql, $con);

?>