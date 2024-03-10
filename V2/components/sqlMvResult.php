<?php
function sqlMvResult($sqlString,$con){

$sql = $sqlString;
$result_home = mysqli_query($con, $sql);

if ($result_home) {
    while ($row = mysqli_fetch_assoc($result_home)) {
        $sr_no = $row['sr_no'];
        $title = $row['title'];
        $image = $row['image'];
        $language = $row['language'];
        $source = $row['source'];

                       echo '
    <a href="mvDetails.php?id=' . $sr_no . '&name=' . $title . '" class="redirect-link">
            <div class="content">
                <img loading="lazy" src="../adm/'.$image.'" alt="" class="content-img">
                <span class="content-source fcap">' . $source . '</span>
            </div>
            <div class="title-container">
                <p class="content-title fcap">' . $title . '</p>
                <p class="content-lang fcap"><b>Lang:</b><span class="lang-highlighter"></span>' . $language . '</p>
            </div>
    </a>
                
';
    }
}
}
?>