<?php
include '../connect.php';

$sr_no = $_GET['updateid'];
//get automatic values in all fields 
$sql = "SELECT * FROM `webuploads` WHERE `id`=$sr_no";
$showResult = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($showResult);
$webname = $row['webname'];
$language = $row['language'];
$season = $row['season'];
$source = $row['source'];
$allEp1 = $row['completeSeason480p'];
$allEp2 = $row['completeSeason720p'];
$allEp3 = $row['completeSeason1080p'];
$ep1 = $row['ep1'];
$ep2 = $row['ep2'];
$ep3 = $row['ep3'];
$ep4 = $row['ep4'];
$ep5 = $row['ep5'];
$ep6 = $row['ep6'];
$ep7 = $row['ep7'];
$ep8 = $row['ep8'];
$ep9 = $row['ep9'];
$ep10 = $row['ep10'];
$ep11 = $row['ep11'];
$ep12 = $row['ep12'];
$ep13 = $row['ep13'];
$ep14 = $row['ep14'];
$ep15 = $row['ep15'];
$ep16 = $row['ep16'];
$ep17 = $row['ep17'];
$ep18 = $row['ep18'];
if (isset($_POST['update'])) {
    $webname = $_POST['webname'];
    $language = $_POST['language'];
    $season = $_POST['season-no'];
    $source = $_POST['source'];
    $allEp1 = $_POST['completeSeason480p'];
    $allEp2 = $_POST['completeSeason720p'];
    $allEp3 = $_POST['completeSeason1080p'];
    $ep1 = $_POST['ep1'];
    $ep2 = $_POST['ep2'];
    $ep3 = $_POST['ep3'];
    $ep4 = $_POST['ep4'];
    $ep5 = $_POST['ep5'];
    $ep6 = $_POST['ep6'];
    $ep7 = $_POST['ep7'];
    $ep8 = $_POST['ep8'];
    $ep9 = $_POST['ep9'];
    $ep10 = $_POST['ep10'];
    $ep11 = $_POST['ep11'];
    $ep12 = $_POST['ep12'];
    $ep13 = $_POST['ep13'];
    $ep14 = $_POST['ep14'];
    $ep15 = $_POST['ep15'];
    $ep16 = $_POST['ep16'];
    $ep17 = $_POST['ep17'];
    $ep18 = $_POST['ep18'];
    $sql = "UPDATE `webuploads` SET `webname` = '$webname', `language` = '$language', `season` = '$season',  `source` = '$source', `completeSeason480p` = '$allEp1', `completeSeason720p` = '$allEp2', `completeSeason1080p` = '$allEp3', `ep1` = '$ep1', `ep2` = '$ep2', `ep3` = '$ep3', `ep4` = '$ep4', `ep5` = '$ep5', `ep6` = '$ep6', `ep7` = '$ep7', `ep8` = '$ep8', `ep9` = '$ep9', `ep10` = '$ep10', `ep11` = '$ep11', `ep12` = '$ep12', `ep13` = '$ep13', `ep14` = '$ep14', `ep15` = '$ep15', `ep16` = '$ep16', `ep17` = '$ep17', `ep18` = '$ep18' WHERE `webuploads`.`id` = $sr_no ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<div class="data-upload">data uploaded Sucessfully</div>';
        header('location:showWeb.php');
    } else {
        die(mysqli_error($con));
    }

}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Update Webseries</title>
    <link rel="stylesheet" href="admStyles/common-uploader.css">
    <link rel='icon' href='data:,'>
</head>

<body>
    <div class="up-container">

        <h3 class="upload">Update Season</h3>
        <form class="upload-container" method="post" enctype="multipart/form-data">
            <div class="upload-title upload-container">
                <label class="cmn-label" for="up-title">Webseries Name</label>
                <?php
                echo '<input class="input-adjust" type="text" id="up-title" name="webname" value="' . $webname . '">'
                    ?>
            </div>
            <div class="upload-language upload-container">
                <label class="cmn-label" for="up-lang">Language</label>
                <?php
                echo '<input class="input-adjust" type="text" id="up-lang" name="language" value="' . $language . '">';
                ?>
            </div>
            <div class="Season-list">

                <div class="season upload-container">
                    <label class="cmn-label" for="up-season">Season No</label>
                    <input class="input-adjust" type="text" id="up-season" name="season-no" value=<?php echo $season; ?>>
                </div>
                <div class="season upload-container">
                    <label class="cmn-label" for="up-source">Source</label>
                    <input class="input-adjust" type="text" id="up-source" name="source" value=<?php echo $source; ?>>
                </div>
                <div class="season upload-container">
                    <label class="cmn-label" for="up-allEp1">Complete Season 480p</label>
                    <input class="input-adjust" type="text" id="up-allEp1" autocomplete="off" name="completeSeason480p" value=<?php echo $allEp1; ?>>
                </div>
                <div class="season upload-container">
                    <label class="cmn-label" for="up-allEp2">Complete Season 720p</label>
                    <input class="input-adjust" type="text" id="up-allEp2" autocomplete="off" name="completeSeason720p" value=<?php echo $allEp2; ?>>
                </div>
                <div class="season upload-container">
                    <label class="cmn-label" for="up-allEp3">Complete Season 1080p</label>
                    <input class="input-adjust" type="text" id="up-allEp3" autocomplete="off" name="completeSeason1080p" value=<?php echo $allEp3; ?>>
                </div>
                <div class=" upload-container">
                    <label class="cmn-label" for="up-ep1">Episode1</label>
                    <input class="input-adjust" type="text" id="up-ep1" autocomplete="off" name="ep1" value=<?php echo $ep1; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep2">Episode2</label>
                    <input class="input-adjust" type="text" id="up-ep2" autocomplete="off" name="ep2" value=<?php echo $ep2; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep3">Episode3</label>
                    <input class="input-adjust" type="text" id="up-ep3" autocomplete="off" name="ep3" value=<?php echo $ep3; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep4">Episode4</label>
                    <input class="input-adjust" type="text" id="up-ep4" autocomplete="off" name="ep4" value=<?php echo $ep4; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep5">Episode5</label>
                    <input class="input-adjust" type="text" id="up-ep5" autocomplete="off" name="ep5" value=<?php echo $ep5; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep6">Episode6</label>
                    <input class="input-adjust" type="text" id="up-ep6" autocomplete="off" name="ep6" value=<?php echo $ep6; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep7">Episode7</label>
                    <input class="input-adjust" type="text" id="up-ep7" autocomplete="off" name="ep7" value=<?php echo $ep7; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep8">Episode8</label>
                    <input class="input-adjust" type="text" id="up-ep8" autocomplete="off" name="ep8" value=<?php echo $ep8; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep9">Episode9</label>
                    <input class="input-adjust" type="text" id="up-ep9" autocomplete="off" name="ep9" value=<?php echo $ep9; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep10">Episode10</label>
                    <input class="input-adjust" type="text" id="up-ep10" autocomplete="off" name="ep10" value=<?php echo $ep10; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep11">Episode11</label>
                    <input class="input-adjust" type="text" id="up-ep11" autocomplete="off" name="ep11" value=<?php echo $ep11; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep12">Episode12</label>
                    <input class="input-adjust" type="text" id="up-ep12" autocomplete="off" name="ep12" value=<?php echo $ep12; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep13">Episode13</label>
                    <input class="input-adjust" type="text" id="up-ep13" autocomplete="off" name="ep13" value=<?php echo $ep13; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep14">Episode14</label>
                    <input class="input-adjust" type="text" id="up-ep14" autocomplete="off" name="ep14" value=<?php echo $ep14; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep15">Episode15</label>
                    <input class="input-adjust" type="text" id="up-ep15" autocomplete="off" name="ep15" value=<?php echo $ep15; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep16">Episode16</label>
                    <input class="input-adjust" type="text" id="up-ep16" autocomplete="off" name="ep16" value=<?php echo $ep16; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep17">Episode17</label>
                    <input class="input-adjust" type="text" id="up-ep17" autocomplete="off" name="ep17" value=<?php echo $ep17; ?>>
                </div>
                <div class=" upload-ep upload-container">
                    <label class="cmn-label" for="up-ep18">Episode18</label>
                    <input class="input-adjust" type="text" id="up-ep18" autocomplete="off" name="ep18" value=<?php echo $ep18; ?>>
                </div>

            </div>

            <div class="action-buttons">
                <button class="btns" type="submit" name="update">Upload</button>
            </div>

        </form>
    </div>

</body>

</html>