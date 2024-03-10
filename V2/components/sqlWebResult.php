<?php

function sqlWebResult($sql,$con)
{
    $result_home = mysqli_query($con, $sql);
    if ($result_home) {
        while ($row = mysqli_fetch_assoc($result_home)) {
            $websr_no = $row['id'];
            $webtitle = $row['webname'];
            $webimage = $row['image'];
            $websource = $row['source'];
            $weblanguage = $row['language'];

            echo '
            <a href="mvDetails.php?id=' . $websr_no . '&name=' . $webtitle . '" class="redirect-link">
            <div class="content">
                <img loading="lazy" src="../adm/'.$webimage.'" alt="" class="content-img">
                <span class="content-source fcap">' . $websource . '</span>
            </div>
            <div class="title-container">
                <p class="content-title fcap">' . $webtitle . '</p>
                <p class="content-lang fcap"><b>Lang:</b><span class="lang-highlighter"></span>' . $weblanguage . '</p>
            </div>
    </a>
  
';
        }
    }
}
?>