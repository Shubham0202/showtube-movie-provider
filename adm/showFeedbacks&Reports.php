<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>feedbacks
    </title>
    <link rel= 'icon' href= 'data:,'>
    <link rel="stylesheet" href="../styles/table.css">
</head>
<body>

    <div class="table-container">

    <h2 class="up-data">User Feedbacks</h2>

    <table class="table">
    <tr>
        <th>Sr No</th>
        <th>User Name</th>
        <th>Suggestions</th>
        <th>Operations</th>
    </tr>
    <tr>
        <?php
    $sql = "SELECT * FROM `feedbacks` ORDER BY `id` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['id'];
    $userName=$row['userName'];
    $sugg=$row['suggestions'];
       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td>'.$userName.'</td>
       <td>'.$sugg.'</td>
       <td>
      <a href="deleteFeedbacks.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
     
       </td>
       </tr>
       ';
    }
        ?>
    </tr>
    </table>
</div>
</body>
</html>