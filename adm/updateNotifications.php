<?php
include '../connect.php';
$id = $_GET['updateid'];

$sql =  "SELECT * FROM `notifications` where id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$notification = $row['notification'];

if(isset($_POST['updateNotification']))
{
    $notification = $_POST['notification'];
    $sql= "UPDATE `notifications` SET `notification` = '$notification' WHERE `notifications`.`id` = $id ";
    $result=mysqli_query($con,$sql);
    if($result)
    header('location:showNotification.php');

}
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
    <form  class="upload-container"  method="post" enctype="multipart/form-data">
        <div class="quality">

            <div class="upload-480p upload-container">
                <label class="cmn-label" for="up-disp" name="discription">Notification</label>
                <textarea name="notification" id="up-disp" cols="20" rows="5" class="input-adjust" placeholder="Write Notification"><?php echo $notification;?></textarea>
            </div>

        </div>
        <div class="action-buttons">
            <button class="btns" type="submit" name="updateNotification">Update</button>
        </div>

    </form>
    </div>
</body>
<script src="../scripts/uploader.js" type="module"></script>

</html>