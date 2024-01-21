<?php
include '../connect.php';
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $language=$_POST['language'];
    $p480=$_POST['480p'];
    $p720=$_POST['720p'];
    $p1080=$_POST['1080p'];
    $source=$_POST['source'];
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
        $upload_image = 'images/'.$imageName;
        move_uploaded_file($image_tmp,$upload_image);
        $sql="insert into `upload_data` (title,image,language,480p,720p,1080p,source) values('$title','$upload_image','$language','$p480','$p720','$p1080','$source')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo '<div class="data-upload">data uploaded Sucessfully</div>';
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
    <title>Uploaded movies</title>
    <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
    <div class="btn-container">
    <a href="Dashboard.php">
        <button class="add-more">Add More Movies</button>
    </a>    
    </div>
    <div class="table-container">

    <h2 class="up-data">Uploaded Movies</h2>

    <table class="table">
    <tr>
        <th class="tHead">Sr No</th>
        <th class="tHead">Movie Name</th>
        <th class="tHead">image</th>
        <th class="tHead">Language</th>
        <th class="tHead">Operations</th>
    </tr>
    <tr>
        <?php
    $sql = "SELECT * FROM `upload_data` ORDER BY last_updated DESC,`sr_no` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['sr_no'];
    $title=$row['title'];
    $image=$row['image'];
    $language=$row['language'];
       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td class="title">'.$title.'</td>
       <td><img loading="lazy" src="'.$image.'"/></td>
       <td>'.$language.'</td>
       <td class="op-btns">
      <a href="updateMovies.php?updateid='.$sr_no.'"> <button class=" up-btn btn-common"><ion-icon name="construct-outline"></ion-icon></button></a>
      <a href="deleteMovies.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
       
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