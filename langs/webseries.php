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
       
        <link rel="shortcut icon" href="/robo.jpeg" type="image/x-icon">
</head>

<body>
<div class="show-alert">
        <?php include '../app.html'; ?>
    </div>
    <div class="show-web">
    <nav class='navbar'>
        <div class="hammer">
            <span class="h h1"></span>
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
        <a href="webseries.php" class="langs active-lang">Webseries</a>
        <a href="southmovie.php" class="langs">SouthMovies</a>
        <a href="hindi.php" class="langs hindi">Hindi</a>
        <a href="marathi.php" class="langs marathi">Marathi</a>
        <a href="english.php" class="langs">Hollywood</a>
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
            <li><a href="../modeapk.php" class="goModeApk">
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
        <input type="text" id="search" placeholder="search Webseries here">
    </div>
    <!-- Main content  -->
<main class="container" id="containerr">
    <div class="content-protector">
  <?php
    $sql= 'SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC';
    $result_home = mysqli_query($con,$sql);
    if($result_home)
    {
        while($row = mysqli_fetch_assoc($result_home))
        {
            $sr_no =$row['id'];
            $title=$row['webname'];
            $image=$row['image'];
            $language=$row['language'];
            $season = $row['season'];
            $source=$row['source'];
            $allEp1 =$row['completeSeason480p'];
            $allEp2 =$row['completeSeason720p'];
            $allEp3 =$row['completeSeason1080p'];
            $ep1= $row['ep1'];
            $ep2= $row['ep2'];
            $ep3= $row['ep3'];
            $ep4= $row['ep4'];
            $ep5= $row['ep5'];
            $ep6= $row['ep6'];
            $ep7= $row['ep7'];
            $ep8= $row['ep8'];
            $ep9= $row['ep9'];
            $ep10=$row['ep10'];
            $ep11=$row['ep11'];
            $ep12=$row['ep12'];
            $ep13 = $row['ep13'];
            $ep14 = $row['ep14'];
            $ep15 = $row['ep15'];
            $ep16 = $row['ep16'];
            $ep17 = $row['ep17'];
            $ep18 = $row['ep18'];
            $encoded_image = base64_encode($image);
            echo '
            <div class="content">
            <div class="content-img">
              <img loading="lazy" src="../adm/'.$image.'" alt="" />
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
              <div class="seasons">
                <div class="drop-down">
                  <div class="s1">season '.$season.' <i class="fas fa-download"></i></div>
                  <ul class="drop-menu drop-menu1">
                      <div class="half-part">
                          <li class="link-cover"><a href="'.$ep1.'"  class="ep-links" target="_blank">Episode1</a></li>
                          <li class="link-cover"><a href="'.$ep2.'"  class="ep-links" target="_blank">Episode2</a></li>
                          <li class="link-cover"><a href="'.$ep3.'"  class="ep-links" target="_blank">Episode3</a></li>
                          <li class="link-cover"><a href="'.$ep4.'"  class="ep-links" target="_blank">Episode4</a></li>
                      </div>
                      <div class="half-part">
                          <li class="link-cover"><a href="'.$ep5.'"  class="ep-links" target="_blank">Episode5</a></li>
                          <li class="link-cover"><a href="'.$ep6.'"  class="ep-links" target="_blank">Episode6</a></li>
                          <li class="link-cover"><a href="'.$ep7.'"  class="ep-links" target="_blank">Episode7</a></li>
                          <li class="link-cover"><a href="'.$ep8.'"  class="ep-links" target="_blank">Episode8</a></li>
                      </div>
                      <div class="half-part">
                          <li class="link-cover"><a href="'.$ep9.'"  class="ep-links" target="_blank">Episode9</a></li>
                          <li class="link-cover"><a href="'.$ep10.'" class="ep-links" target="_blank">Episode10</a></li>
                          <li class="link-cover"><a href="'.$ep11.'" class="ep-links" target="_blank">Episode11</a></li>
                          <li class="link-cover"><a href="'.$ep12.'" class="ep-links" target="_blank">Episode12</a></li>
                      </div>
                      <div class="half-part">
                          <li class="link-cover"><a href="'.$ep13.'"  class="ep-links" target="_blank">Episode13</a></li>
                          <li class="link-cover"><a href="'.$ep14.'" class="ep-links" target="_blank">Episode14</a></li>
                          <li class="link-cover"><a href="'.$ep15.'" class="ep-links" target="_blank">Episode15</a></li>
                          <li class="link-cover"><a href="'.$ep16.'" class="ep-links" target="_blank">Episode16</a></li>
                      </div>
                      <div class="half-part">
                          <li class="link-cover"><a href="'.$ep17.'"  class="ep-links" target="_blank">Episode17</a></li>
                          <li class="link-cover"><a href="'.$ep18.'" class="ep-links" target="_blank">Episode18</a></li>
                          <li class="link-cover"><a href="'.$ep18.'" class="ep-links" target="_blank">Episode18</a></li>
                          <li class="link-cover"><a href="'.$ep18.'" class="ep-links" target="_blank">Episode18</a></li>
                      </div>
                      <div class="half-part"></div> <!--this half part is just for all ep display correctly -->
                      <div class="half-part">
                      <li class="link-cover"><a href="'.$allEp1.'"  class="ep-links" target="_blank">All Episodes (480p)</a></li>
                      <li class="link-cover"><a href="'.$allEp2.'"  class="ep-links" target="_blank">All Episodes (720p)</a></li>
                      <li class="link-cover"><a href="'.$allEp3.'"  class="ep-links" target="_blank">All Episodes (1080p)</a></li>  
                  </div>
                  </ul>
                  
                </div>
              </div>
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
<!-- <script src="../scripts/lazyLoading.js"></script> -->
<script src="webScript/dropDown.js"></script>
<script src="webScript/replaceWithHttps.js"></script>
<script src="webScript/hideEmptyUrl.js"></script>

</body>

</html>