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
    <link rel="stylesheet" href="styles/request.css">
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
        <li><a href="filerequest.php" class="file-request active-bar">
                <i class="fas fa-cloud-upload "></i>
                <div class="bar-name">Movie Request</div>
            </a></li>
        <li><a href="modeapk.php" class="goModeApk">
                <i class="fa-solid fa-store"></i>
                <div class="bar-name">Mode Apks</div>
            </a></li>

    </div>

    <!-- menu list -->
    <div class="menu-list inactive-menu">
        <ul class="ul-list">
            <li><a class="list-items" href="https://freemovie.showtube.live"><i class="fas fa-home"></i> Home</a></li>
            <li><a class="list-items" href="slider/about.php"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a class="list-items" href="slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy & Policy</a>
            </li>
            <li><a class="list-items" href="slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
            <li><div class="list-items share-app"><i class="fas fa-share-alt"></i> Share App</div></li>
        </ul>
        <div class="close-menu inactive-close-menu"></div>
    </div>
    <!-- searchbar  -->
    <div class="search-bar">
        <input type="text" id="search" placeholder="search movies here" >
    </div>
    <!-- Main content  -->
    <main class="fr-container" id="containerr">
        <div class="movie-request">
            <form action="response.php" method="post" class="form-style">
                <div class="upper-title">
                    <h3 class="form-title">Request your movie Here</h3>
                </div>
                <div class="inp-parent">
                    <input type="text" placeholder="Your Name" class="inp-adjust" name="userName">
                </div>
                <div class="inp-parent">
                    <input type="text" placeholder="Movie / Webseries Name" class="inp-adjust"
                        name="movieName" required autocomplete="off">
                </div>
                <div class="inp-parent">
                    <input type="text" placeholder="Language" class="inp-adjust" name="movieLanguage" required>
                </div>
                <div class="inp-parent">
                    <select name="source-option" id="source-option">
                        <option class="source-values" value="Telegram">Get Movies On</option>
                        <option class="source-values" value="Telegram">Telegram</option>
                        <option class="source-values" value="Terabox">Terabox</option>
                    </select>
                </div>
                <div class="submit-btn">
                    <button type="submit" name="fileReq" class="s-btn">Submit</button>
                </div>
            </form>
        </div>

    </main>
    </div>
    <script src="scripts/main.js"></script>
    <script src="scripts/checkRefer.js"></script>
    <script src="scripts/getSource.js"></script>

</body>

</html>