<?php
include '../connect.php';

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

<h3 class="upload">Upload Apk</h3>
<form action="showApk.php" class="upload-container"  method="post" enctype="multipart/form-data">
    <div class="upload-img upload-container">
        <label class="cmn-label" for="up-img">Upload Image</label>
        <input class="input-adjust" type="file" id="up-img" name="image">
    </div>
    <div class="upload-title upload-container">
        <label class="cmn-label" for="up-title">Apk Name</label>
        <input class="input-adjust" type="text" id="up-title" name="apkTitle">
    </div>
    <div class="upload-language upload-container">
        <label class="cmn-label" for="up-dwn">Download Link</label>
        <input class="input-adjust" type="text" id="up-dwn" name="download" autocomplete="off">
    </div>
    <div class="quality">

        <div class="upload-480p upload-container">
            <label class="cmn-label" for="up-size">size</label>
            <input class="input-adjust" type="number" id="up-size" name="size" placeholder="Write Only Integer Value">
        </div>
        <div class="upload-720p upload-container">
            <label class="cmn-label" for="up-version">Version</label>
            <input class="input-adjust" type="text" id="up-version" name="version" autocomplete="off">
        </div>
        <div class="upload-1080p upload-container">
            <label class="cmn-label" for="up-features">Features</label>
            <input class="input-adjust" type="text" id="up-features" name="features">
        </div>
    </div>
    <div class="action-buttons">
        <button class="btns" type="submit" name="upApk">Upload</button>
        
    </div>

</form>
</div>
</body>
</html>