<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upcoming Uploader</title>
    <link rel="stylesheet" href="admStyles/common-uploader.css">
</head>

<body>
    <div class="up-container">

    <h3 class="upload">upcoming Uploader</h3>
    <form action="showUpcomings.php"  class="upload-container"  method="post" enctype="multipart/form-data">
        <div class="upload-img upload-container">
            <label class="cmn-label" for="up-img">Upload Image</label>
            <input class="input-adjust" type="file" id="up-img" name="image">
        </div>
        <div class="upload-title upload-container">
            <label class="cmn-label" for="up-title">Movie Name</label>
            <input class="input-adjust" type="text" id="up-title" name="title">
        </div>
        <div class="upload-language upload-container">
            <label class="cmn-label" for="up-lang">Language</label>
            <input class="input-adjust" type="text" id="up-lang" name="language">
        </div>
        <div class="quality">

            <div class="upload-480p upload-container">
                <label class="cmn-label" for="up-disp" name="discription">Discription</label>
                <textarea name="discription" id="up-disp" cols="20" rows="5" class="input-adjust" placeholder="Write Discription"></textarea>
            </div>

        </div>
        <div class="action-buttons">
            <button class="btns" type="submit" name="upUpcom">Upload</button>
        </div>

    </form>
    </div>
</body>
<script src="../scripts/uploader.js" type="module"></script>

</html>