<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Movie</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="styles/re.css">
    <link rel="stylesheet" href="styles/srch.css">
    <link rel="shortcut icon" href="showtubeV2.jpg" type="image/x-icon">

</head>

<body>
    <div class="result">
        <div class="back-to-page">
            <i class="uil uil-arrow-circle-left bck-btn"></i>
            <i class="uil uil-search srch-btn2"></i>
        </div>
        <form action="search.php" method="get">
            <div class="take-input2">
                <input type="search" name="srchmv" id="srchmv" placeholder="Search">
            </div>
            <div class="search-result1">
                <?php
                echo '
                <div class="srch-title">
                <b>Search result for:</b> 
                <span class="search-name">All Webseries</span>
                </div>
                ';

                ?>
                <div class="mv-container srch-arrangement mv-data">
                 
                    <?php
            $sql = "SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC";
            include 'components/sqlWebResult.php';
            sqlWebResult($sql,$con);
            ?>
                </div>
            </div>
            <!-- search result1 -->
    </div>
    <?php
    include 'components/Nav/navigation.php';
        ?>
</body>

<script src="js/commonFunctionality.js"></script>
<script src="js/noResultFound.js"></script>

</html>