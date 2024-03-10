<?php

function showNav($url1, $url2, $url3)
{
    echo ' <div class="features">
    <a href="' . $url1 . '" class="f-items">
        <i class="uil uil-tv-retro common-item"></i>
        <p class="f-name">Home</p>
    </a>
    <a href="' . $url2 . '" class="f-items">
        <i class="uil uil-folder-question common-item"></i>
        <p class="f-name">Requst Movie</p>
        </a>
    <a href="' . $url3 . '" class="f-items">
        <i class="uil uil-comment-alt-plus common-item"></i>
        <p class="f-name">Notifications</p>
    </a>
</div>';
}
$url1= 'index.php';
$url2= 'requestmovie.php';
$url3= 'notifications.html';

showNav($url1,$url2,$url3);
?>