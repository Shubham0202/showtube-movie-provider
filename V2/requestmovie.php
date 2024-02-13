<?php
include 'connect.php';

if (isset($_POST['fileReq'])) {
    $userName = $_POST['userName'];
    $movieName = $_POST['movieName'];
    $language = $_POST['movieLanguage'];
    $getSource = $_POST['source-option'];

    $sql = "insert into `movie_request` (`userName`, `movieName`, `movieLanguage`, `date`,`getsource`) values('$userName','$movieName','$language',current_timestamp(),'$getSource')";
     $result = mysqli_query($con, $sql);
    // header('location:requestmovie.php');
    session_start();
    $_SESSION['movieReq']='true';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Movie | ShowTube</title>
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="showtubeV2.jpg" type="image/x-icon">

</head>
<body>
    <div class="show-success-msg">
    <?php
    if(isset($_SESSION['movieReq']))
    {
      $wtch = $_SESSION['movieReq'];
      if($wtch == 'true')
          echo ' <div class="success-msg">
          <p class="msg">Movie Requested Sucessfully</p>
          <i class="uil uil-times cross"></i>
      </div>';

      else
          echo ' <div class="success-msg">
          <p class="msg">Error Occured</p>
          <i class="uil uil-times cross"></i>
      </div>';
    }
    ?>
    </div>
    <div class="back-btn-container">
        <a href="#" class="back back-btn">
            <i class="uil uil-arrow-circle-left"></i>
        </a>
    </div>
    <div class="grid" class="change-bg">
        <form action="requestmovie.php" method="post" id="requstForm">
            <div class="title">
                Request Movies
            </div>
            <div class="writting-conatainer">
                <div class="input-data">
                    <label for="usrName" class="inp-label common-mg-pd"><i class="uil uil-chat-bubble-user"></i></label>
                    <input type="text" id="usrName" class="inp-tag common-mg-pd" placeholder="Your Name" name="userName">
                </div>
                <div class="input-data">
                    <label for="mvname" class="inp-label common-mg-pd"><i class="uil uil-clapper-board"></i></label>
                    <input type="text" id="mvname" class="inp-tag common-mg-pd" placeholder="Movie/Webseries" name="movieName">
                </div>
                <div class="input-data">
                    <label for="lang" class="inp-label common-mg-pd"><i class="uil uil-letter-chinese-a"></i></label>
                    <input type="text" id="lang" class="inp-tag common-mg-pd" placeholder="Language" name="movieLanguage">
                </div>
        <div class="source-container">
            <div class="source-data">
                <label for="tel" class="source-label inp-label common-mg-pd"><i class="uil uil-telegram"></i></label>
                <input type="radio" id="tel" class="source-tag common-mg-pd" name="source-option" value="Telegram">
                <span>Telegram</span>
            </div>
            <div class="source-data">
                <label for="ter" class="source-label inp-label common-mg-pd"><i class="uil uil-programming-language"></i></label>
                <input type="radio" id="ter" class="source-tag common-mg-pd" name="source-option" value="Terabox">
                <span>Terabox</span>
            </div>
            <div class="source-data">
                <label for="any" class="source-label inp-label common-mg-pd checked"><i class="uil uil-n-a"></i></label>
                <input type="radio" id="any" class="source-tag common-mg-pd" name="source-option" checked value="Any">
                <span>Any</span>
            </div>
        </div>
            </div>
            <div class="submit-btn">
                <button class="submit" name="fileReq">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="js/requestMovieBackFunction.js"></script>
<script src="js/hideSucessMsg.js"></script>
</html>