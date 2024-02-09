<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowTube</title>
    <link rel="stylesheet" href="styles/re.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="showtubeV2.jpg" type="image/x-icon">
</head>

<body>
    <header>
<div class="identity">
            <div class="logo">
                <img src="showtubeV2.jpg" alt="" class="logoV2">
            </div>
            <div class="web-title">
                <span class="fst-letter">S</span><span class="mdl-letter">how</span><span
                    class="fst-letter">T</span><span class="mdl-letter">ube</span>

            </div>
        </div>

        <div class="nav">

            <div class="hammer">
                <span class="h1 h"></span>
                <span class="h2 h"></span>
                <span class="h3 h"></span>
            </div>
            <i class="uil uil-search srch-logo srch-btn"></i></a>
        </div>
        </header>
    <!-- navigation menu  -->
    <div class="nav-options">
        <ul class="ul-list">
            <li><a href="#">Home</a></li>
            <li><a href="slider/about.html">About</a></li>
            <li><a href="#">Privacy & Policy</a></li>
            <li><a href="#">FeedBack</a></li>
            <li><a href="#" class="share-app">Share</a></li>
        </ul>
        <div class="close-ul-list"></div>
    </div>
    <main class="main-container">

        <form action="search.php" method="get">
            <div class="take-input">
                <input type="search" name="srchmv" id="srchmv" placeholder="Search">
            </div>
        </form>
        <div class="mv-web-label">
            <div class="content-shifter">
                <h3 class="label-title activate-content load-mv content-shift-bg">Movies</h3>
                <h3 class="label-title activate-content current-web">Webseries</h3>
            </div>
            <div class="show-all-container">
                <a href="showAllMv.php" class="show-all">Show All <i class="uil uil-angle-right-b"></i> </a>
                <a href="showAllWeb.php" class="show-all hidden">Show All <i class="uil uil-angle-right-b"></i> </a>
            </div>
        </div>

        <div class="mv-container mv-data mv-specific">

            <?php
            $sql = 'SELECT * FROM `upload_data` ORDER BY last_updated DESC,`sr_no` DESC LIMIT 10';
            include 'components/sqlMvResult.php';
            sqlMvResult($sql,$con);
            ?>
        </div>
        <!-- mv container end -->
        <div class="load-more">
            <button class="load-mv load-btn">Load More</button>
        </div>
        <div class="load-more">
        <button class="load-web load-btn hidden">Load More</button>
    </div>
    </main>

        <?php
    include 'components/Nav/navigation.php';
   
        ?>
</body>
<script src="js/commonFunctionality.js"></script>
<script src="js/hammer.js"></script>
<script src="js/homeSearch.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="ajaxjs/limitLoad.js"></script>
<script src="ajaxjs/loadweb.js"></script>
<script src="ajaxjs/currentWeb.js"></script>
<script src="js/shareweb.js"></script>
<script src="js/selectMode.js"></script>
<!-- <script src="js/selectNav.js"></script> -->
</html>