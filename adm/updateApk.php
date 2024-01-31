<?php
include '../connect.php';
$sr_no = $_GET['updateid'];

$sql = "select * from `modeapk`";
$result= mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$sr_no=$row['id'];
$webName=$row['apkTitle'];
$size=$row['size'];
$download=$row['download'];
$V=$row['version'];
$features=$row['features'];


if(isset($_POST['update']))
{
$apkTitle = $_POST['apkTitle'];
$downloadLink = $_POST['download'];
$size = $_POST['size'];
$version = $_POST['version'];
$features = $_POST['features'];
$sql="UPDATE  `modeapk`  SET  `apkTitle` = '$apkTitle',`size`='$size',`version`='$version',`features`='$features',`download`='$downloadLink' WHERE `modeapk`.`id`=$sr_no";
$result = mysqli_query($con,$sql);
if($result)
header('location:showApk.php');
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Mode Apks</title>
    <link rel= 'icon' href= 'data:,'>
    <link rel="stylesheet" href="admStyles/common-uploader.css">
</head>
<body>
<div class="up-container">

<h3 class="upload">Upload Movie</h3>
<form class="upload-container"  method="post" enctype="multipart/form-data">
   
    <div class="upload-title upload-container">
        <label class="cmn-label" for="up-title">Apk Name</label>
        <?php
      echo '<input class="input-adjust" type="text" id="up-title" name="apkTitle" value="'.$webName.'">';
        ?>
    </div>
    <div class="upload-language upload-container">
        <label class="cmn-label" for="up-dwn">Download Link</label>
        <?php
        echo '<input class="input-adjust" type="text" id="up-dwn" name="download" value="'.$download.'" autocomplete="off">';

        ?>
    </div>
    <div class="quality">

        <div class="upload-480p upload-container">
            <label class="cmn-label" for="up-size">size</label>
            <?php
           echo ' <input class="input-adjust" type="text" id="up-size" name="size" value="'.$size.'">';
        ?>
        </div>
        <div class="upload-720p upload-container">
            <label class="cmn-label" for="up-version">Version</label>
            <?php
          echo '<input class="input-adjust" type="text" id="up-version" name="version" value="'.$V.'">';
        ?>
        </div>
        <div class="upload-1080p upload-container">
            <label class="cmn-label" for="up-features">Features</label>
            <?php
            echo '<input class="input-adjust" type="text" id="up-features" name="features" value="'.$features.'">';
        ?>
        </div>
    </div>
    <div class="action-buttons">
        <button class="btns" type="submit" name="update">Upload</button>
        <!-- <button class="btns see-btn" type="reset">Reset</button> -->
    </div>

</form>
</div>
</body>
</html>