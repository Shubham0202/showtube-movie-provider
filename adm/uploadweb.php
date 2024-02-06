<?php
include '../connect.php';

if(isset($_POST['submit']))
{
    $webname = $_POST['webname'];
    $language = $_POST['language'];
    $season = $_POST['season-no'];
    $ep1= $_POST['ep1'];
    $ep2= $_POST['ep2'];
    $ep3= $_POST['ep3'];
    $ep4= $_POST['ep4'];
    $ep5= $_POST['ep5'];
    $ep6= $_POST['ep6'];
    $ep7= $_POST['ep7'];
    $ep8= $_POST['ep8'];
    $ep9= $_POST['ep9'];
    $ep10= $_POST['ep10'];
    $ep11= $_POST['ep11'];
    $ep12= $_POST['ep12'];
    $ep13= $_POST['ep13'];
    $ep14= $_POST['ep14'];
    $ep15= $_POST['ep15'];
    $ep16= $_POST['ep16'];
    $ep17= $_POST['ep17'];
    $ep18= $_POST['ep18'];
    $source=$_POST['source'];
    $allEp1=$_POST['completeSeason480p'];
    $allEp2=$_POST['completeSeason720p'];
    $allEp3=$_POST['completeSeason1080p'];
    $image = $_FILES['image'];
    // print_r($image);
    $imageName = $image['name'];
    // print_r($imageName);
    $image_tmp = $image['tmp_name'];
    // print_r($image_tmp);
    $image_extension = explode('.',$imageName);
    // print_r($image_extension);
    //image extension convert array into string
    $conv_extension= strtolower(end($image_extension));
    $extensions= array('jpg','jpeg','png','webp');
    //check image extension or given image extension matches or not 
    if(in_array($conv_extension,$extensions))
    {
        $upload_image = 'images/'.$imageName;
        move_uploaded_file($image_tmp,$upload_image);

        $sql = "INSERT INTO `webuploads` (`id`, `webname`, `language`, `season`, `image`,`source`,`completeSeason480p`,`completeSeason720p`, `completeSeason1080p`, `ep1`, `ep2`, `ep3`, `ep4`, `ep5`, `ep6`, `ep7`, `ep8`, `ep9`, `ep10`,`ep11`,`ep12`,`ep13`,`ep14`,`ep15`,`ep16`,`ep17`,`ep18`) VALUES (NULL, '$webname', '$language', '$season', '$upload_image','$source','$allEp1','$allEp2','$allEp3', '$ep1', '$ep2', '$ep3', '$ep4', '$ep5', '$ep6', '$ep7', '$ep8', '$ep9', '$ep10', '$ep11', '$ep12', '$ep13', '$ep14', '$ep15', '$ep16', '$ep17', '$ep18')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            // echo '<div class="data-upload">data uploaded Sucessfully</div>';
            header('location:showWeb.php');
        }
        else{
            die(mysqli_error($con));
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websieres Uploader</title>
    <link rel="stylesheet" href="admStyles/common-uploader.css">
</head>

<body>
    <div class="up-container">

    <h3 class="upload">Upload Webseries</h3>
    <form action="uploadweb.php"  class="upload-container"  method="post" enctype="multipart/form-data">
        <div class="upload-img upload-container">
            <label class="cmn-label" for="up-img">Upload Image</label>
            <input class="input-adjust" type="file" id="up-img" name="image">
        </div>
        <div class="upload-title upload-container">
            <label class="cmn-label" for="up-title">Webseries Name</label>
            <input class="input-adjust" type="text" id="up-title" name="webname">
        </div>
        <div class="upload-language upload-container">
            <label class="cmn-label" for="up-lang">Language</label>
            <input class="input-adjust" type="text" id="up-lang" name="language" value="webseries,">
        </div>
        <div class="Season-list">

            <div class="season upload-container">
                <label class="cmn-label" for="up-season">Season No</label>
                <input class="input-adjust" type="text" id="up-season" name="season-no" >
            </div>
            <div class="season upload-container">
                <label class="cmn-label" for="up-source">Source</label>
                <input class="input-adjust" type="text" id="up-source" name="source" >
            </div>
            <div class="season upload-container">
                <label class="cmn-label" for="up-allEp1">Complete Season 480p</label>
                <input class="input-adjust" type="text" id="up-allEp1" name="completeSeason480p" autocomplete="off">
            </div>
            <div class="season upload-container">
                <label class="cmn-label" for="up-allEp2">Complete Season 720p</label>
                <input class="input-adjust" type="text" id="up-allEp2" name="completeSeason720p" autocomplete="off">
            </div>
            <div class="season upload-container">
                <label class="cmn-label" for="up-allEp3">Complete Season 1080p</label>
                <input class="input-adjust" type="text" id="up-allEp3" name="completeSeason1080p" autocomplete="off">
            </div>
            <div class=" upload-container">
                <label class="cmn-label" for="up-ep1">Episode1</label>
                <input class="input-adjust" type="text" id="up-ep1" name="ep1" autocomplete="off">
            </div>  
           
          
        </div>
        <div class="episodes-list">
            <div class="add-more-ep">Add Episode</div>
        </div>
        <div class="action-buttons">
            <button class="btns" type="submit" name="submit">Upload</button>
        </div>

    </form>
    </div>
</body>
<script src="admWebscripts/web.js" type="module"></script>

</html>