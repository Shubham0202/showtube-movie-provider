<?php
include '../connect.php';
?>
<?php 
function uploadMovie()
{

   echo ' <div class="up-container">

    <h3 class="upload">Upload Movie</h3>
    <form action="showMovies.php"  class="upload-container"  method="post" enctype="multipart/form-data">
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
                <label class="cmn-label" for="up-480p">Link1 (480p)</label>
                <input class="input-adjust" type="text" id="up-480p" name="480p" autocomplete="off">
            </div>
            <div class="upload-720p upload-container">
                <label class="cmn-label" for="up-720p">Link2 (720p)</label>
                <input class="input-adjust" type="text" id="up-720p" name="720p" autocomplete="off">
            </div>
            <div class="upload-1080p upload-container">
                <label class="cmn-label" for="up-1080p">Link3 (1080p)</label>
                <input class="input-adjust" type="text" id="up-1080p" name="1080p" autocomplete="off">
            </div>
            <div class="upload-source upload-container">
                <label class="cmn-label" for="up-source">Source</label>
                <input class="input-adjust" type="text" id="up-source" name="source">
            </div>
        </div>
        <div class="action-buttons">
            <button class="btns" type="submit" name="submit">Upload</button>
            <!-- <button class="btns see-btn" type="reset">Reset</button> -->
        </div>

    </form>
    </div>
    ';
}
?>