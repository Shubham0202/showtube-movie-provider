<?php
        
        include '../connect.php';
        $sql = 'SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC LIMIT 10';
        include '../components/sqlWebResult.php';
        sqlWebResult($sql, $con);
?>