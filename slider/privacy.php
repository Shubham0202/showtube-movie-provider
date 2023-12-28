<?php
include '../connect.php';
include '../loader.php';

if (isset($_POST['report'])) {
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $suggestion = $_POST['suggestions'];

    $sql = "insert into `feedbacks` (userName,email,suggestions) values('$userName','$email','$suggestion')";
    $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faster Movies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/request.css">
    <link rel="shortcut icon" href="../logo/logoAnd.png" type="image/x-icon">

    <style>
        .p1 {
            margin-top: 1em;
        }

        .p1-para {
            margin: 1em 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
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
                    <i class="fa-solid fa-store"></i>
                    <div class="bar-name">Mode Apks</div>
                </a></li>

        </div>

        <!-- menu list -->
        <div class="menu-list inactive-menu">
            <ul class="ul-list">
                <li><a class="list-items" href="https://freemovie.showtube.live"><i class="fas fa-home"></i> Home</a></li>
                <li><a class="list-items" href="../slider/about.php"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a class="list-items" href="../slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy &
                        Policy</a></li>
                <li><a class="list-items" href="../slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
                <li><a class="list-items" href="../slider/shareapp.php"><i class="fas fa-share-alt"></i> Share App</a>
                </li>
            </ul>
            <div class="close-menu inactive-close-menu"></div>
        </div>
        <!-- searchbar  -->
        <div class="search-bar">
            <input type="text" id="search" placeholder="search movies here" onkeyup="search()">
        </div>
        <!-- Main content  -->
        <main class="container">
            <div class="privacy">
                <h3 class="privacy-title">Privacy</h3>
                <ul class="privacy-list">
                    <li>
                        <dl class="p1">Introduction
                            <dt class="p1-para"> <strong> We are not collect your Personal information when you use our
                                    ShowTube app </strong>. We are committed to protecting your privacy By using our
                                app, you consent to the terms and conditions of this Privacy Policy.
                            </dt>
                            <!-- <dt class="p1-para">
                    We collect personal information from you when you create an account, log in, and use our app. This information may include your name, email address
                </dt> -->
                            <dt class="p1-para">
                                We are provide you with a personalized best file sharing experience.
                            </dt>

                        </dl>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/checkRefer.js"></script>

</body>

</html>