<?php
include 'connect.php';
include 'loader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faster Movies</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/modeapk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
              <link rel="shortcut icon" href="robo.jpeg" type="image/x-icon">


</head>

<body>
    <div class="show-alert">
        <?php include 'app.html'; ?>
    </div>
    <div class="show-web">
        <nav class='navbar'>
            <div class="hammer">
                <span class="h  h1"></span>
                <span class="h h2 "></span>
                <span class="h h3 "></span>
            </div>
            <div class="appName">Show<span class="tube">Tube</span> </div>
            <div class="searchBtn">
                <i class='srch-btn fa fa-search'></i>
            </div>
        </nav>

        <div class='menu-bar'>
            <li><a href="https://freemovie.showtube.live" class="goHome">
                    <i class='fas fa-home'></i>
                    <div class="bar-name">Home</div>
                </a></li>
            <li><a href="newrelease.php" class="goNew">
                    <i class='fas fa-plus'></i>
                    <div class="bar-name">upcoming </div>
                </a></li>
            <li><a href="filerequest.php" class="file-request">
                    <i class="fas fa-cloud-upload "></i>
                    <div class="bar-name">Movie Request</div>
                </a></li>
            <li><a href="modeapk.php" class="goModeApk active-bar">
                    <i class="fa-solid fa-store"></i>
                    <div class="bar-name">Mode Apks</div>
                </a></li>

        </div>

        <!-- menu list -->
        <div class="menu-list inactive-menu">
            <ul class="ul-list">
                <li><a class="list-items" href="https://freemovie.showtube.live"><i class="fas fa-home"></i> Home</a></li>
                <li><a class="list-items" href="slider/about.php"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a class="list-items" href="slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy &
                        Policy</a>
                </li>
                <li><a class="list-items" href="slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
                <li><div class="list-items share-app"><i class="fas fa-share-alt"></i> Share App</div></li>
        </ul>
            <div class="close-menu inactive-close-menu"></div>
        </div>
        <!-- searchbar  -->
        <div class="search-bar">
            <input type="text" id="search" placeholder="search movies here" onkeyup="search()">
        </div>
        <!-- Main content  -->
        <main class="container" id="containerr">
            <?php
            $sql = 'SELECT * FROM `modeapk` ORDER BY `id` DESC';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $sr_no = $row['id'];
                $apkTitle = $row['apkTitle'];
                $image = $row['image'];
                $size = $row['size'];
                $version = $row['version'];
                $features = $row['features'];
                $downloadLink = $row['download'];

                echo '
 <div class=" content app-container">
 <div class="app-img">
     <img loading="lazy" src="adm/'.$image.'" alt="">
 </div>
 <div class="app-info">
     <h3 class="content-title app-title">'.$apkTitle.'</h3>
     <p class="app-size">Size: '.$size.'Mb</p>
     <ul class="app-features">
         <li class="version">'.$version.'</li>
         <li class="features">🌟'.$features.'</li>
     </ul>
     
     <div class="dwn-btn-apk">
         <a href="'.$downloadLink.'" target="_blank"><button class="app-dwn-btn apk-dwn">Download</button> </a>
     </div>
 </div>
</div>
 ';

            }
            ?>

        </main>
    </div>
    <script src="scripts/main.js"></script>
    <script src="scripts/checkRefer.js"></script>

</body>

</html>