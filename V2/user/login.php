<?php
include '../connect.php';

if (isset($_POST['login'])) {

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
   
    $sql = "SELECT * FROM `login` WHERE user = '$user' AND password = '$pwd'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
       $login = true;
       session_start();
       $_SESSION['loginSucess']= true;
       $_SESSION['username'] = $user;
       header('location: ../adm/Dashboard.php');
    }
    else
   {
       session_start();
       $_SESSION['logfail']='true';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Movie | ShowTube</title>
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="../showtubeV2.jpg" type="image/x-icon">

</head>
<body>
    <div class="show-success-msg">
    <?php
    if(isset($_SESSION['logfail']))
    {
      $wtch = $_SESSION['logfail'];
      if($wtch == 'true')
          echo ' <div class="success-msg">
          <p class="msg">Invalid UserId And Password</p>
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
        <form method="post" id="requstForm">
            <div class="title">
                Log In
            </div>
            <div class="writting-conatainer">
                <div class="input-data">
                    <label for="usrName" class="inp-label common-mg-pd"><i class="uil uil-chat-bubble-user"></i></label>
                    <input type="text" id="usrName" class="inp-tag common-mg-pd" placeholder="UserId" name="user">
                </div>
                <div class="input-data">
                    <label for="mvname" class="inp-label common-mg-pd"><i class="uil uil-clapper-board"></i></label>
                    <input type="password" id="mvname" class="inp-tag common-mg-pd" placeholder="Password" name="pwd">
                </div>
              
       
            </div>
            <div class="submit-btn">
                <button class="submit" name="login">Log In</button>
            </div>
        </form>
    </div>
</body>
<script src="../js/requestMovieBackFunction.js"></script>
<script src="../js/hideSucessMsg.js"></script>
</html>