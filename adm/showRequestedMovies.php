<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>RqMv</title>
    <link rel= 'icon' href= 'data:,'>
    <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
<div class="btn-container">
    <a href="Dashboard.php">
        <button class="add-more">Add More Movies</button>
    </a>    
    </div>
    <div class="table-container">

    <h2 class="up-data">Requested Movies</h2>

    <table class="table">
    <tr>
        <th>Sr No</th>
        <th>User Name</th>
        <th>Movie Name</th>
        <th>Language</th>
        <th>Source</th>
        <th>Date & time</th>
        <th>Operations</th>
    </tr>
    <tr>
        <?php
    $sql = "SELECT * FROM `movie_request` ORDER BY `id` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['id'];
    $userName=$row['userName'];
    $movieName=$row['movieName'];
    $language=$row['movieLanguage'];
    $source = $row['getsource'];
    $date = $row['date'];
       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td>'.$userName.'</td>
       <td>'.$movieName.'</td>
       <td>'.$language.'</td>
       <td>'.$source.'</td>
       <td>'.$date.'</td>
       <td>
      <a href="deleteRequestedMovies.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
     
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