<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded WebSeries</title>
    <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
    <div class="btn-container">
    <a href="Dashboard.php">
        <button class="add-more">Add More Movies</button>
    </a>    
    </div>
    <div class="table-container">

    <h2 class="up-data">Uploaded WebSeries</h2>

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
    $sql = "SELECT * FROM `webuploads` ORDER BY last_updated DESC,`id` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['id'];
    $webName=$row['webname'];
    $image=$row['image'];
    $season=$row['season'];
    $language=$row['language'];

       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td>'.$webName.'</td>
       <td><img loading="lazy" src="'.$image.'"/></td>
       <td>'.$language.'</td>
       <td>'.$season.'</td>
       <td>
      <a href="updateWebseries.php?updateid='.$sr_no.'"> <button class=" up-btn btn-common"><ion-icon name="construct-outline"></ion-icon></button></a>
      <a href="deleteWebseries.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
       
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