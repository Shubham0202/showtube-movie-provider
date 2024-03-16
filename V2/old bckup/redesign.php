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
                <img src="../logo/showtubeV2.jpg" alt="" class="logoV2">
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
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy & Policy</a></li>
            <li><a href="#">FeedBack</a></li>
            <li><a href="#">Share</a></li>
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
            <h3 class="label-title">Movies</h3>
            <a href="showAllMv.php" class="show-all">Show All <i class="uil uil-angle-right-b"></i> </a>
        </div>

        <div class="mv-container mv-data mv-specific">

            <?php
            $sql = 'SELECT * FROM `upload_data` ORDER BY last_updated DESC,`sr_no` DESC LIMIT 6';
            $result_home = mysqli_query($con, $sql);
            if ($result_home) {
                while ($row = mysqli_fetch_assoc($result_home)) {
                    $sr_no = $row['sr_no'];
                    $title = $row['title'];
                    $image = $row['image'];
                    $language = $row['language'];
                    $source = $row['source'];

                    echo '
        <a href="mvDetails.php?id=' . $sr_no . '&name=' . $title . '" class="redirect-link">
        <div class="content">
            <img loading="lazy" src="../adm/' . $image . '" alt="" class="content-img">
            <span class="content-lang fcap">' . $source . '</span>
            <div class="title-container">
                <span class="content-title fcap">' . $title . '</span>
            </div>
        
        </div>
    </a>
';
                }
            }
            ?>
        </div>
        <!-- mv container end -->
        <div class="load-more">
            <button class="load-mv load-btn">Load More</button>
        </div>

        <!-- web container -->
        <div class="mv-web-label">
            <h3 class="label-title">Webseries</h3>
            <a href="showAllWeb.php" class="show-all">Show All <i class="uil uil-angle-right-b"></i> </a>
        </div>

        <div class="mv-container mv-data web-specific">
            <?php
            $sql = 'SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC LIMIT 6';
            $result_home = mysqli_query($con, $sql);
            if ($result_home) {
                while ($row = mysqli_fetch_assoc($result_home)) {
                    $websr_no = $row['id'];
                    $webtitle = $row['webname'];
                    $webimage = $row['image'];
                    $websource = $row['source'];

                echo '
                    <a href="mvDetails.php?id=' . $websr_no . '&name=' . $webtitle . '" class="redirect-link">
                    <div class="content">
                        <img loading="lazy" src="../adm/'.$webimage.'" alt="" class="content-img">
                        <span class="content-source fcap">' . $websource . '</span>
                    </div>
                    <div class="title-container">
                        <p class="content-title fcap">' . $webtitle . '</p>
                        <p class="content-lang fcap"><b>Lang:</b><span class="lang-highlighter"></span>' . $weblanguage . '</p>
                    </div>
            </a>
          
    ';
                }
            }
            ?>
        </div>
        <!-- web end -->
        <div class="load-more">
        <button class="load-web load-btn">Load More</button>
    </div>
    </main>

    <!-- home functionalities -->
    <div class="features">
        <a href="reDesignHome.php" class="f-items"><i class="uil uil-tv-retro common-item"></i></a>
        <a href="requestmovie.php" class="f-items"><i class="uil uil-folder-question common-item"></i></a>
        <a href="notifications.html" class="f-items"><i class="uil uil-comment-alt-plus common-item"></i></a>
    </div>

</body>
<script src="js/commonFunctionality.js"></script>
<script src="js/hammer.js"></script>
<script src="js/homeSearch.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="ajaxjs/limitLoad.js"></script>
<script src="ajaxjs/loadweb.js"></script>

</html>