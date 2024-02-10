<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Details</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="styles/re.css" />
    <link rel="stylesheet" href="styles/srch.css" />
    <link rel="shortcut icon" href="showtubeV2.jpg" type="image/x-icon">

</head>

<body>
    <div class="details">

        <div class="back-to-page">
            <i class="uil uil-arrow-circle-left bck-btn"></i>
            <i class="uil uil-search srch-btn2"></i>
        </div>
        <form action="search.php" method="get">
            <div class="take-input2">
                <input type="search" name="srchmv" id="srchmv" placeholder="Search">
            </div>
        </form>
        <div class="mv-data">
            <?php

            $catchData = $_GET['id'];
            $catchName = $_GET['name'];
            $sql = "SELECT * FROM upload_data WHERE sr_no=$catchData AND title LIKE '%$catchName%'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $sr_no = $row['sr_no'];
                    $title = $row['title'];
                    $image = $row['image'];
                    $language = $row['language'];
                    $p480 = $row['480p'];
                    $p720 = $row['720p'];
                    $p1080 = $row['1080p'];
                    $source = $row['source'];
                    $encoded_image = base64_encode($image);
                    
                    echo ' <div class="center-img-div">
                    <div class="antina"></div>
                    <div class="mv-img">
                        <img src="../adm/'.$image.'" alt="" />
                    </div>
                    <div class="steper"></div>
                    <div class="stand"></div>
                </div>
    
                <div class="mv-content common-mv-css">
                    <div class="mv-title">
                        <b>Title:</b>
                        <span class="fcap">'.$title.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>Language:</b>
                        <span class="fcap highlight">'.$language.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>Source:</b>
                        <span class="fcap">'.$source.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>IMDB:</b>
                        <span>Comming Soon...</span>
                    </div>
                </div>
    
                <div class="mv-download-links common-mv-css">
    
                    <div class="down-title">Downloads</div>
                    <table class="download-table">
                        <tr class="dwn-links">
                            <th class="pd-50">Quality</th>
                            <th class="pd-1">Downloads</th>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">480p</td>
                            <td class="bottom-border">
                                <a href="'.$p480.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">720p</td>
                            <td class="bottom-border">
                                <a href="'.$p720.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">1080p</td>
                            <td class="bottom-border">
                                <a href="'.$p1080.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
    
                    </table>
    
                </div>
    ';
                }
            }

            //web sql
            // $cachWebId = $_GET['webid'];
            $sql= "SELECT * FROM `webuploads` WHERE id=$catchData AND webname LIKE '%$catchName%'";
            $result_home = mysqli_query($con,$sql);
            if($result_home)
            {
                while($row = mysqli_fetch_assoc($result_home))
                {
                    $sr_no =$row['id'];
                    $title=$row['webname'];
                    $image=$row['image'];
                    $language=$row['language'];
                    $season = $row['season'];
                    $source=$row['source'];
                    $allEp1 =$row['completeSeason480p'];
                    $allEp2 =$row['completeSeason720p'];
                    $allEp3 =$row['completeSeason1080p'];
                    $ep1= $row['ep1'];
                    $ep2= $row['ep2'];
                    $ep3= $row['ep3'];
                    $ep4= $row['ep4'];
                    $ep5= $row['ep5'];
                    $ep6= $row['ep6'];
                    $ep7= $row['ep7'];
                    $ep8= $row['ep8'];
                    $ep9= $row['ep9'];
                    $ep10=$row['ep10'];
                    $ep11=$row['ep11'];
                    $ep12=$row['ep12'];
                    $ep13 = $row['ep13'];
                    $ep14 = $row['ep14'];
                    $ep15 = $row['ep15'];
                    $ep16 = $row['ep16'];
                    $ep17 = $row['ep17'];
                    $ep18 = $row['ep18'];

                    echo ' <div class="center-img-div">
                    <div class="antina"></div>
                    <div class="mv-img">
                        <img src="../adm/'.$image.'" alt="" />
                    </div>
                    <div class="steper"></div>
                    <div class="stand"></div>
                </div>
    
                <div class="mv-content common-mv-css">
                    <div class="mv-title">
                        <b>Title:</b>
                        <span class="fcap">'.$title.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>Language:</b>
                        <span class="fcap highlight">'.$language.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>Source:</b>
                        <span class="fcap">'.$source.'</span>
                    </div>
                    <div class="mv-lang">
                        <b>IMDB:</b>
                        <span>Comming Soon...</span>
                    </div>
                </div>
    
                <div class="mv-download-links common-mv-css">
    
                    <div class="down-title">Downloads</div>
                    <table class="download-table">
                        <tr class="dwn-links">
                            <th class="pd-50">Quality</th>
                            <th class="pd-1">Downloads</th>
                        </tr>
                       
                        <!-- web Section -->
                        <tr class="mv-quality">
                            <td class="quality-title">Complete Series 480p</td>
                            <td class="bottom-border">
                                <a href="'.$allEp1.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Complete Series 720p</td>
                            <td class="bottom-border">
                                <a href="'.$allEp2.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Complete Series 1080p</td>
                            <td class="bottom-border">
                                <a href="'.$allEp3.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 1</td>
                            <td class="bottom-border">
                                <a href="'.$ep1.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 2</td>
                            <td class="bottom-border">
                                <a href="'.$ep2.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 3</td>
                            <td class="bottom-border">
                                <a href="'.$ep3.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 4</td>
                            <td class="bottom-border">
                                <a href="'.$ep4.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 5</td>
                            <td class="bottom-border">
                                <a href="'.$ep5.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 6</td>
                            <td class="bottom-border">
                                <a href="'.$ep6.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 7</td>
                            <td class="bottom-border">
                                <a href="'.$ep7.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 8</td>
                            <td class="bottom-border">
                                <a href="'.$ep8.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 9</td>
                            <td class="bottom-border">
                                <a href="'.$ep9.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 10</td>
                            <td class="bottom-border">
                                <a href="'.$ep10.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 11</td>
                            <td class="bottom-border">
                                <a href="'.$ep11.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 12</td>
                            <td class="bottom-border">
                                <a href="'.$ep12.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 13</td>
                            <td class="bottom-border">
                                <a href="'.$ep13.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 14</td>
                            <td class="bottom-border">
                                <a href="'.$ep14.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 15</td>
                            <td class="bottom-border">
                                <a href="'.$ep15.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="mv-quality">
                            <td class="quality-title">Episode 16</td>
                            <td>
                                <a href="'.$ep16.'" class="mv-download">
                                    <i class="uil uil-download-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
    
                </div>
    ';
                }
            }        
            ?>
           
        </div>
        <!-- mv data -->
    </div>
</body>
<script src="js/mvLinksVisibility.js"></script>
<script src="js/commonFunctionality.js"></script>

</html>