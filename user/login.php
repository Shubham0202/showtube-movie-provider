<?php
include '../connect.php';

 $showError = false;
if(isset($_POST['submit']))
{
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
 $showError =true;
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome</title>
    <link rel= 'icon' href= 'data:,'>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/request.css">
    <link rel="stylesheet" href="userStyles/signup.css">
</head>
<body class="lg-body"/>
<nav class='navbar'>
    <div class="hammer">
        <span class="h  h1"></span>
        <span class="h h2 "></span>
            <span class="h h3 "></span>
        </div>
        <div class="appName">Show<span class="tube">Tube</span> </div>
        <div class="searchBtn">
            <i class='srch-btn fas fa-search'></i>
        </div>
    </nav>
    
    
    <!-- menu list -->
    <div class="menu-list inactive-menu">
        <ul class="ul-list">
            <li><a class="list-items" href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a class="list-items" href="../slider/about.php"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a class="list-items" href="../slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy & Policy</a></li>
            <li><a class="list-items" href="../slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
            <li><a class="list-items" href="../slider/shareapp.php"><i class="fas fa-share-alt"></i> Share App</a></li>
        </ul>
        <div class="close-menu inactive-close-menu"></div>
    </div>
    <!-- searchbar  -->
    <main class="fr-container">
     <?php
        if ($showError)
            echo '<div class="empty-em ac-fail ac-common">
        <span class="text">Invalid Creadentials</span>
         <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
         </div>';
         ?>
<div class="movie-request lg-cont">
        <form method="post" class="form-style">
            <div class="upper-title">
                <h3 class="form-title">Login</h3>
            </div>
            <div class="inp-parent">
                <input type="text" placeholder="Email" class="inp-adjust" name="user">
            </div>
            <div class="inp-parent">
                <input type="password" placeholder="Password" class="inp-adjust" name="pwd">
            </div>
           
            <div class="submit-btn">
                <button type="submit" name="submit" class="sign-lg s-btn">Log in</button>
            </div>
                <div class="or-line">
                            OR
                    </div>

                    <div class="other-methods">

                    <a href="#" class="with-google">
                        <img src="userStyles/google.png" alt="">
                        <span class="with-google-title">Log In with google</span>
                    </a>
                    
                </div>
        </form>
    </div>
 
</main>
<script src="../scripts/main.js"></script>
<script src="userScripts/functionality.js"></script>
</body>
</html>