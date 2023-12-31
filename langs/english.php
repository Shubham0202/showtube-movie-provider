<?php
include '../connect.php';
include '../loader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faster Movies</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="../logo/robo.jpeg" type="image/x-icon">

</head>

<body>
<div class="show-alert">
        <?php include '../app.html'; ?>
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

    <div class='lang-container'>
        <a href="https://freemovie.showtube.live" class="langs">AllMovies</a>
        <a href="english.php" class="langs active-lang">Hollywood</a>
        <a href="webseries.php" class="langs">Webseries</a>
        <a href="southmovie.php" class="langs">SouthMovies</a>
        <a href="hindi.php" class="langs hindi">Hindi</a>
        <a href="marathi.php" class="langs marathi">Marathi</a>
        <a href="kdrama.php" class="langs">Drama</a>
    </div>

    <div class='menu-bar'>
        <li><a href="https://freemovie.showtube.live" class="goHome">
                <i class='fas fa-home'></i>
                <div class="bar-name">Home</div>
            </a></li>
        <li><a href="../newrelease.php" class="goNew">
                <i class='fas fa-plus'></i>
                <div class="bar-name">upcoming </div>
            </a></li>
        <li><a href="../filerequest.php" class="file-request">
                <i class="fas fa-cloud-upload "></i>
                <div class="bar-name">Movie Request</div>
            </a></li>
            <li><a href="../modapk.php" class="goModeApk">
                 <i class="fa-solid fa-store"></i> <div class="bar-name">Mode Apks</div>
            </a></li>

    </div>
    
    <!-- menu list -->
    <div class="menu-list inactive-menu">
        <ul class="ul-list">
            <li><a class="list-items" href="https://freemovie.showtube.live"><i class="fas fa-home"></i> Home</a></li>
            <li><a class="list-items" href="../slider/about.php"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a class="list-items" href="../slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy & Policy</a></li>
            <li><a class="list-items" href="../slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
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
    <div class="content-protector">
  <?php
    $sql= 'SELECT * FROM `upload_data` WHERE language LIKE "%english% " ORDER BY `sr_no` DESC';
    $result_home = mysqli_query($con,$sql);
    if($result_home)
    {
        while($row = mysqli_fetch_assoc($result_home))
        {
            $sr_no =$row['sr_no'];
            $title=$row['title'];
            $image=$row['image'];
            $language=$row['language'];
            $p480=$row['480p'];
            $p720=$row['720p'];
            $p1080=$row['1080p'];
            $source=$row['source'];
            $encoded_image = base64_encode($image);
            echo '
            <div class="content">
            <div class="content-img">
              <img loading="lazy" src="../adm/'.$image.'" alt="">
            </div>
            <div class="content-info">
                <h3 class="content-title">'.$title.'</h3>
                <div class="content-lang">
                    <span class="lang-title lang-common">Language:</span>
                    <span class="lang-name lang-common">'.$language.'</span>
                </div>
                <div class="content-lang">
                <span class="lang-title lang-common">Source:</span>
                <span class="lang-name lang-common">'.$source.'</span>
            </div>
               <ul class="quality">
                <li class="link-cover"> 
                <a href="'.$p480.'" class="quality-links ep-links" target="_blank">480p <i class="fas fa-download"></i></a>
                </li>
                <li class="link-cover">
                <a href="'.$p720.'" class="quality-links ep-links" target="_blank">720p <i class="fas fa-download"></i></a>
                 </li>
                <li class="link-cover">
                <a href="'.$p1080.'" class="quality-links ep-links" target="_blank">1080p <i class="fas fa-download"></i></a>
                 </li>
                </ul>
            </div>
        </div>            
            ';
        }
    }

  ?>
    </div>
 
</main>
    </div>
<script src="../scripts/main.js"></script>
<script src="../scripts/checkRefer.js"></script>
<script src="webScript/hideEmptyUrl.js"></script>
</body>

</html>