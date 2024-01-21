<?php
include '../connect.php';

if(isset($_POST['upApk']))
{
$apkTitle = $_POST['apkTitle'];
$downloadLink = $_POST['download'];
$size = $_POST['size'];
$version = $_POST['version'];
$features = $_POST['features'];
$image = $_FILES['image'];
    
$imageName = $image['name'];
$image_tmp = $image['tmp_name'];
// print_r($image_tmp);
$image_extension = explode('.',$imageName);
//image extension convert array into string
$conv_extension= strtolower($image_extension[1]);
$extensions=array('jpg','jpeg','png','webp');
//check image extension or given image extension matches or not 
if(in_array($conv_extension,$extensions))
{
    $upload_image = 'apkImages/'.$imageName;
    move_uploaded_file($image_tmp,$upload_image);

    $sql="insert into `modeapk` (apkTitle,image,size,version,features,download) values('$apkTitle','$upload_image','$size','$version','$features','$downloadLink')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo '<div class="data-upload">data uploaded Sucessfully</div>';
        // header('location:showApk.php');
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
    <title>Uploaded Apk</title>
    <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
    <div class="btn-container">
    <a href="Dashboard.php">
        <button class="add-more">Add More Movies</button>
    </a>    
    </div>
    <div class="table-container">

    <h2 class="up-data">Uploaded Apk</h2>

    <table class="table">
    <tr>
        <th>Sr No</th>
        <th>WebSeries Name</th>
        <th>image</th>
        <th>Language</th>
        <th>Season</th>
        <th>Operations</th>
    </tr>
    <tr>
        <?php
    $sql = "SELECT * FROM `modeapk` ORDER BY `id` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['id'];
    $webName=$row['apkTitle'];
    $image=$row['image'];
    $season=$row['size'];
    $language=$row['download'];

       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td>'.$webName.'</td>
       <td><img loading="lazy" src="'.$image.'"/></td>
       <td>'.$language.'</td>
       <td>'.$season.'</td>
       <td>
      <a href="updateApk.php?updateid='.$sr_no.'"> <button class=" up-btn btn-common"><ion-icon name="construct-outline"></ion-icon></button></a>
      <a href="deleteApk.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
       
       </td>
       </tr>
       ';
    }
        ?>
    </tr>
    </table>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>