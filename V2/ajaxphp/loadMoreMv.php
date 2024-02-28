<?php
include '../connect.php';
$search_value = $_POST['search'];
$sql = 'SELECT * FROM `upload_data` ORDER BY last_updated DESC,`sr_no` DESC LIMIT '.$search_value;
include '../components/sqlMvResult.php';
sqlMvResult($sql,$con);
?>