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
                $name = $_GET['srchmv'];
                echo '
                <div class="srch-title">
                <b>Search result for:</b> 
                <span class="search-name">' . $name . '</span>
                </div>
                ';

                ?>
                <div class="mv-container srch-arrangement mv-data">
                    <?php
                    $sql = "SELECT * FROM `upload_data` where LOWER(title) like LOWER('%$name%')";
                    $result_home = mysqli_query($con, $sql);
                    if ($result_home) {
                        while ($row = mysqli_fetch_assoc($result_home)) {
                            $sr_no = $row['sr_no'];
                            $title = $row['title'];
                            $image = $row['image'];
                            $source = $row['source'];
                            $language = $row['language'];
                                               echo '
    <a href="mvDetails.php?id=' . $sr_no . '&name=' . $title . '" class="redirect-link">
            <div class="content">
                <img loading="lazy" src="../adm/'.$image.'" alt="" class="content-img">
                <span class="content-source fcap">' . $source . '</span>
            </div>
            <div class="title-container">
                <p class="content-title fcap">' . $title . '</p>
                <p class="content-lang fcap"><b>Lang:</b><span class="lang-highlighter"></span>' . $language . '</p>
            </div>
    </a>
                
';
                        }
                    }

                    ?>

                    <!-- web -->
                    <?php
            $sql = "SELECT * FROM `webuploads` WHERE webname LIKE '%$name%'";
            $result_home = mysqli_query($con, $sql);
            if ($result_home) {
                while ($row = mysqli_fetch_assoc($result_home)) {
                    $websr_no = $row['id'];
                    $webtitle = $row['webname'];
                    $webimage = $row['image'];
                    $websource = $row['source'];
                    $weblanguage = $row['language'];
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