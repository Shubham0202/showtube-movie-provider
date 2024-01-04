<?php
include '../connect.php';

session_start();
if (!isset($_SESSION['loginSucess']) || $_SESSION['loginSucess'] != true) {
  header('location:../user/login.php');
  exit;
}


$sql1 = "SELECT COUNT(*) AS count FROM upload_data";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
$count1 = $row1['count'];

$sql2 = "SELECT COUNT(*) AS count FROM release_mv";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($result2);
$count2 = $row2['count'];

$sql3 = "SELECT COUNT(*) AS count FROM webuploads";
$result3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_array($result3);
$count3 = $row3['count'];

$sql4 = "SELECT COUNT(*) AS count FROM feedbacks";
$result4 = mysqli_query($con, $sql4);
$row4 = mysqli_fetch_array($result4);
$count4 = $row4['count'];

$sql5 = "SELECT COUNT(*) AS count FROM movie_request";
$result5 = mysqli_query($con, $sql5);
$row5 = mysqli_fetch_array($result5);
$count5 = $row5['count'];

$sql6 = "SELECT COUNT(*) AS count FROM modeapk";
$result6 = mysqli_query($con, $sql6);
$row6 = mysqli_fetch_array($result6);
$count6 = $row6['count'];

$sql7 = "SELECT COUNT(*) AS count FROM notifications";
$result7 = mysqli_query($con, $sql7);
$row7 = mysqli_fetch_array($result7);
$count7 = $row7['count'];

?>

<?php
if(isset($_POST['logOut']))
{
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['loginSucess']);
  header('location:../user/login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>
  <link rel="icon" href="data:," />
  <link rel="stylesheet" href="dashStyles/dashborad.css" />
  <link rel="stylesheet" href="admStyles/common-uploader.css">
  <link rel="shortcut icon" href="../logo/logoAnd.png" type="image/x-icon">
</head>

<body>
  <div class="main-dashboard">
    <div class="fix-issue"></div> <!--remove when sidebar is non fixed position  -->
    <div class="side-bar">
      <ul class="side-bar-items">
        <li>
          <a href="#" class="dash-item s-items-border"><i class="dash-icon"><ion-icon
                name="home-outline"></ion-icon></i>
            <span class="s-title">dashborad</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="library-outline"></ion-icon></i><span
              class="s-title">uploaded Movies</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="film-outline"></ion-icon></i><span
              class="s-title">uploaded Webseries</span></a>
        </li>
        <li>
          <a href="#" class="s-items" name="s"><i class="dash-icon"><ion-icon name="albums-outline"></ion-icon></i><span
              class="s-title">Upcomings</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="alarm-outline"></ion-icon></i>
            <span class="s-title">Requested movies</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="notifications-outline"></ion-icon></i>
            <span class="s-title">Notifications</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="mail-unread-outline"></ion-icon></i>
            <span class="s-title">feedbacks</span></a>
        </li>
        <li>
          <a href="#" class="s-items"><i class="dash-icon"><ion-icon name="storefront-outline"></ion-icon></i>
            <span class="s-title">Mode Apk</span></a>
        </li>

        <li>
          <form method="POST">
          <button type="submit" class="s-items" name="logOut" id="lgout">
            <i class="dash-icon"><ion-icon name="exit-outline"></ion-icon></i>
            <span class="s-title">logout</span>
          </a>
        </form>  
        </li>
      </ul>
    </div>

    <div class="show-section">
      <div class="welcome-adm">
        <h3 class="welcome-title">Welcome , Admin</h3>
        <div class="adm-user">
          <?php echo $_SESSION['username']; ?>
        </div>
      </div>
      <div class="section-container">

        <section class="dash section-common">

          <div class="dash-1 dash1-common">
            <h3 class="order-title">Admin</h3>
            <div class="dash-options">

              <a href="#" class="box" id="up_mov">
                <p class="title">Upload Movie</p>
                <h3 class="count">
                  <?php echo $count1 ?>+
                </h3>
              </a>
              <a href="#" class="box" id="up_upc">
                <p class="title">Upload upcomings</p>
                <h3 class="count">
                  <?php echo $count2 ?>+
                </h3>
              </a>
              <a href="#" class="box" id="up_req">
                <p class="title">Upload Webseries</p>
                <h3 class="count">
                  <?php echo $count3 ?>+
                </h3>
               
              </a>
              <a href="#" class="box" id="up_apk">
                <p class="title">Upload Apk</p>
                <h3 class="count">
                  <?php echo $count6 ?>+
                </h3>
              </a>
              <a href="#" class="box" id="up_not">
                <p class="title">Add Notifications</p>
                <h3 class="count">
                  <?php echo $count7 ?>+
                </h3>
              </a>
            </div>
          </div>
          <div class="dash-2 dash1-common">
            <h3 class="order-title">User</h3>
            <div class="dash-options">

              <a href="#" class="box">
                <p class="title">Feedback</p>
                <h3 class="count">
                  <?php echo $count4 ?>+
                </h3>
              </a>
              <a href="#" class="box">
                <p class="title">Requested Movies</p>
                <h3 class="count">
                  <?php echo $count5 ?>+
                </h3>
              </a>
              <a href="#" class="box">
                <p class="title">Empty</p>
                <h3 class="count">0+</h3>
              </a>

            </div>

          </div>
        </section>

        <!-- show all sections  in dashboard all forms -->
        <!-- show-features OR box section section content  -->
        <section class="show-features show-movie inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-movie">
            <?php include 'uploadMovie.php';
            echo uploadMovie();
            ?>
          </div>
        </section>
        <section class=" show-features show-upcoming inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-upcoming">
            <?php include 'uploadUpcomings.php'; ?>
          </div>
        </section>

        <section class=" show-features show-upcoming inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-web">
            <?php include 'uploadweb.php'; ?>
          </div>
        </section>
        <section class=" show-features show-upcoming inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-web">
            <?php  include 'uploadApk.php'; ?>
          </div>
        </section>
        <section class=" show-features show-upcoming inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-web">
            <?php  include 'uploadNotifications.php'; ?>
          </div>
        </section>
        <section class=" show-features show-feedbacks inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-web">
            <?php  include 'showFeedbacks&Reports.php'; ?>
          </div>
        </section>
        <section class=" show-features show-reqmovies inactive-features">
          <div class="back-btn"><i><ion-icon name="arrow-back-outline"></ion-icon></i></div>
          <div class=" show-web">
            <?php  include 'showRequestedMovies.php'; ?>
          </div>
        </section>
      </div>

      <!-- sidebar Menu display -->
      <!-- show all things we uploaded  -->
      <div class="section-container">
      <div class="display-sidebar-options display-sideOp">
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showMovies.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showWeb.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showUpcomings.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showRequestedMovies.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showNotification.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showFeedbacks&Reports.php'; ?>
        </section>
        <section class="showmovie show-sidebar inactive-sidebar">
          <?php include 'showApk.php'; ?>
        </section>
      </div>
</div>


    </div> <!-- Admin -->
  </div>
  <!-- ionic -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<script src="dashboard.js"></script>

</html>