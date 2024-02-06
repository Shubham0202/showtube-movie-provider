<?php
include '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notifications</title>
    <link rel="stylesheet" href="admStyles/common-uploader.css">
</head>

<body>
    <div class="up-container">

    <h3 class="upload">Upload Notifications</h3>
    <form action="showNotification.php"  class="upload-container"  method="post" enctype="multipart/form-data">
        <div class="quality">

            <div class="upload-480p upload-container">
                <label class="cmn-label" for="up-disp" name="discription">Notification</label>
                <textarea name="notification" id="up-disp" cols="20" rows="5" class="input-adjust" placeholder="Write Notification"></textarea>
            </div>

        </div>
        <div class="action-buttons">
            <button class="btns" type="submit" name="upNotification">Upload</button>
        </div>

    </form>
    </div>
</body>
<script src="../scripts/uploader.js" type="module"></script>

</html>