<?php
include '../connect.php';
$sr_no = $_GET['updateid'];

//get automatic values in all fields 
$sql = "SELECT * FROM `upload_data` WHERE sr_no=$sr_no";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$allTitle = htmlspecialchars($title);
$language = $row['language'];
$p480 = $row['480p'];
$p720 = $row['720p'];
$p1080 = $row['1080p'];
$source = $row['source'];
if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $language = $_POST['language'];
    $p480 = $_POST['480p'];
    $p720 = $_POST['720p'];
    $p1080 = $_POST['1080p'];
    $source = $_POST['source'];

    $sql = "UPDATE `upload_data` SET `title` = '$title', `language` = '$language', `480p`='$p480', `720p`='$p720', `1080p`='$p1080',`source`='$source'  WHERE `upload_data`.`sr_no` = $sr_no ";
    $resultUpdate = mysqli_query($con, $sql);
    if ($resultUpdate) {
        // echo "updated sucessfully";
        header('location:showMovies.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update content</title>

    <link rel="stylesheet" href="admStyles/common-uploader.css">
</head>

<body>
    <div class="up-container">

        <h2 class="update">Update content</h2>
        <form class="upload-container" method="post" enctype="multipart/form-data">
            <div class="upload-title upload-container">
                <label class="cmn-label" for="up-title">Movie Name</label>
                <?php
                echo '<input class="input-adjust" type="text" id="up-title" name="title" value="' . $allTitle . '">';
                ?>
            </div>
            <div class="upload-language upload-container">
                <label class="cmn-label" for="up-lang">Language</label>
                <input class="input-adjust" type="text" id="up-lang" name="language" value=<?php echo $language ?>>
            </div>
            <div class="quality">

                <div class="upload-480p upload-container">
                    <label class="cmn-label" for="up-480p">480p</label>
                    <input class="input-adjust" type="text" id="up-480p" autocomplete="off" name="480p" value=<?php echo $p480; ?>>
                </div>
                <div class="upload-720p upload-container">
                    <label class="cmn-label" for="up-720p">720p</label>
                    <input class="input-adjust" type="text" id="up-720p" autocomplete="off" name="720p" value=<?php echo $p720; ?> >
                </div>
                <div class="upload-1080p upload-container">
                    <label class="cmn-label" for="up-1080p">1080p</label>
                    <input class="input-adjust" type="text" id="up-1080p" autocomplete="off" name="1080p" value=<?php echo $p1080; ?>>
                </div>
                <div class="upload-source upload-container">
                    <label class="cmn-label" for="up-source">Source</label>
                    <input class="input-adjust" type="text" id="up-source" name="source" value=<?php echo $source ?>>
                </div>
            </div>
            <div class="action-buttons">
                <button class="btns" type="submit" name="update">Update</button>
                <button class="btns see-btn" type="reset">Reset</button>
            </div>

        </form>
    </div>
</body>
<script src="uploader.js" type="module"></script>

</html>