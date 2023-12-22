<?php
include '../connect.php';
include '../loader.php';
$check_pwd = false;
$emptyPwd = false;
$invalidEmail = false;
$emptyEmail = false;
$acc = false;
$userExists = false;
if (isset($_POST['submit'])) {

    $user = $_POST['userEm'];
    $pwd = $_POST['pwd'];
    $re_pwd = $_POST['re-pwd'];
    // check Condition for email
    if (!(strpos($user, '@gmail.com') || strpos($user, '@outlook.com'))) {
        if ($user == null)
            $emptyEmail = true;
        // echo 'empty string';
        else
            $invalidEmail = true;
        // echo 'invalid em';

    }
    // check Condition for pwd
    if (!($pwd == $re_pwd) || $pwd == null){
        if ($pwd == null || $re_pwd == null)
            $emptyPwd = true;
        else
            $check_pwd = true; //pwd not match
    }

    //check all conditions is not null 

    if (!($user == null && $pwd == null && $re_pwd == null) && ($invalidEmail == false) && ($check_pwd == false))
     {
        
            $sql = "insert into `login` (user,password,time) value('$user','$pwd',current_timestamp())";
            $result = mysqli_query($con, $sql);
            $acc = true;
            header('location: login.php');
        
    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome</title>
    <link rel='icon' href='data:,'>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/request.css">
    <link rel="stylesheet" href="userStyles/signup.css">
</head>

<body class="lg-body">
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
            <li><a class="list-items" href="../slider/privacy.php"> <i class="fas fa-user-secret"></i> Privacy &
                    Policy</a>
            </li>
            <li><a class="list-items" href="../slider/feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
            <li><a class="list-items" href="../slider/shareapp.php"><i class="fas fa-share-alt"></i> Share App</a></li>
        </ul>
        <div class="close-menu inactive-close-menu"></div>
    </div>
    <!-- searchbar  -->

    <main class="fr-container">
        <?php
        if ($check_pwd && $invalidEmail)
            echo '<div class="empty-em ac-fail ac-common">
        <span class="text">Please Enter Correct Email & Password</span>
         <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
         </div>';
         if($userExists)
         echo '<div class="empty-em ac-fail ac-common">
         <span class="text">Username already exists</span>
          <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
          </div>';
          else if ($check_pwd) {
            echo '<div class="empty-em ac-fail ac-common">
            <span class="text">password Didnt Match</span>
             <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
             </div>';
        }
        
        else if ($invalidEmail)
            echo '<div class="empty-em ac-fail ac-common">
        <span class="text">Invalid Email Address</span>
         <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
         </div>';
        else if ($emptyEmail && $emptyPwd)
            echo '<div class="empty-em ac-fail ac-common">
            <span class="text">Please Enter You Email & Password</span>
             <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
             </div>';
        else if ($acc) {
            echo '<div class="empty-em ac-sucess ac-common">
            <div class="text">Account created Sucessfully</div>
             <span class="close-error"><img class="cross" src="userStyles/cross.png"/></span>
             </div>';
        }
        ?>
        <div class="movie-request lg-cont">
            <form method="post" class="form-style" id="myForm">
                <div class="upper-title">
                    <h3 class="form-title">Sign Up</h3>
                </div>
                <div class="inp-parent">
                    <input type="text" placeholder="Email" class="inp-adjust" name="userEm"
                        title="Please enter Your email address" id="email">
                </div>
                <div class="inp-parent">
                    <input type="password" placeholder="Password" class="inp-adjust" name="pwd"
                        title="password must be 8 digits" id="pwd">
                </div>
                <div class="inp-parent">
                    <input type="password" placeholder="Confirm Password" class="inp-adjust" name="re-pwd" id="re-pwd">
                </div>
                <div class="submit-btn">
                    <button type="submit" name="submit" class="s-btn sign-lg">Sign Up</button>
                </div>
                <div class="go-login">
                    <button><a href="login.php">already have an account ?</a></button>
                </div>
                    <div class="or-line">
                            OR
                    </div>

                    <div class="other-methods">

                    <a href="#" class="with-google">
                        <img src="userStyles/google.png" alt="">
                        <span class="with-google-title">Signup With google</span>
                    </a>
                    
                </div>
            </form>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="userScripts/functionality.js"></script>
</body>

</html>