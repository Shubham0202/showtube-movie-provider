<?php
include '../connect.php';
if(isset($_POST['upNotification']))
{
$notifications = $_POST['notification'];

$sql = "INSERT INTO `notifications` (notification) VALUES('$notifications')";
$result = mysqli_query($con,$sql);
if($result)
echo 'data uploaded sucessfully';
}

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Notifications
    </title>
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

    <h2 class="up-data">Notifications</h2>

    <table class="table">
    <tr>
        <th>Sr No</th>
        <th>Notification</th>
        <th>Fixed MSG </th>
        <th>Operations</th>
    </tr>
    <tr>
        <?php
    $sql = "SELECT * FROM `notifications` ORDER BY `id` DESC";
    $result= mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
   {
    $sr_no=$row['id'];
    $notification=$row['notification'];
       echo '
       <tr>
       <td>'.$sr_no.'</td>
       <td>'.$notification.'</td>
       <td></td>
       <td>
      <a href="updateNotifications.php?updateid='.$sr_no.'"><button class=" up-btn btn-common"><ion-icon name="construct-outline"></ion-icon></button></a>
      <a href="deleteNotifications.php?deleteid='.$sr_no.'"><button class=" del-btn btn-common"><ion-icon name="trash-outline"></ion-icon></button></a>
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