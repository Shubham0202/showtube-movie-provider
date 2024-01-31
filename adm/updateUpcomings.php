<?php
include '../connect.php';
$sr_no =$_GET['updateid'];

//get automatic values in all fields 
$sql="SELECT * FROM `release_mv` WHERE id=$sr_no";
$result = mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$language=$row['language'];
$disp=$row['discription'];

if(isset($_POST['updateUpcom']))
{  
    $title = $_POST['title'];
    $language=$_POST['language'];
    $disp=$_POST['discription'];
  

    $sql= "UPDATE `release_mv` SET `title` = '$title', `language` = '$language', `discription`='$disp' WHERE `release_mv`.`id` = $sr_no ";
    $resultUpdate = mysqli_query($con,$sql);
    if($resultUpdate)
    {
        // echo "updated sucessfully";
        header('location:showUpcomings.php');
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

<h3 class="upload"> update upcoming Uploader</h3>
<form class="upload-container"  method="post" enctype="multipart/form-data">
    
    <div class="upload-title upload-container">
        <label class="cmn-label" for="up-title">Movie Name</label>
        <?php
         echo '<input class="input-adjust" type="text" id="up-title" name="title" value="'.$title.'">';
         
        ?>
    </div>
    <div class="upload-language upload-container">
        <label class="cmn-label" for="up-lang">Language</label>
        <input class="input-adjust" type="text" id="up-lang" name="language" value=<?php echo $language; ?>>
    </div>
    <div class="quality">

        <div class="upload-480p upload-container">
            <label class="cmn-label" for="up-disp" name="discription">Discription</label>
            <?php
         echo '<textarea name="discription" id="up-disp" cols="20" rows="5" class="input-adjust" placeholder="Write Discription" >'.$disp.'</textarea>';
         
        ?>
        </div>

    </div>
    <div class="action-buttons">
        <button class="btns" type="submit" name="updateUpcom">Upload</button>
    </div>

</form>
</div>

    </form>
    </div>
</body>

</html>