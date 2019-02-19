<?php

include "./includes/db_select_image.php";






$folderString="./uploads/";
$completeFileString=$folderString.$filename;
$size=getimagesize($completeFileString);
$var1=preg_split("/[\/]/",$completeFileString);





?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="src-css/slightskeleton.css">
        <script src="./src-js/jquery-3.3.1.js"></script>
        <style>
         .navbar{

             background-color:white;
             position:fixed;
             top:0;
             right:0;
             float:right;

         }

        </style>


    </head>
    <body>
        <div class="row">
            <div class="three columns">
                <div class="navbar">

<!-- future navbar?? -->
                </div>
            </div>
            
            
            <div class="container nine columns">
                <h3>Cloud effects</h3>
                <h5>A very low-level way to randomly generate clouds, using parameters set by user</h5>
                <h6>This was taken from a huge real messy project I attempted, that had so many effects, but were quite messy</h6>


                <table>
                <form action="switch_cloudEffects.php" method="get">
                    <tr>
                        <td>

<input type="hidden" name="availableEffects" value="Clouds"/>
                            <td class="photo"><img src="
<?php
echo $completeFileString;
?>


                                              "/></td>
                        </td>
                        <td>
                                                <td width="30%">

                            <label>Cloud weight</label>
                            <input name="cloudWeight" type="range" min="1" max="8"/>
                            <label>Cloud dispersion</label>
                            <input name="cloudDispersion"  type="range" min="1" max="8"/>
                            <input hidden name="completeFileString" value="<?php
                                                                         echo $completeFileString;
                                                                         ?>" />
                            <input type="submit" class="button button-active" value="process effects (PHP)"  id="oneEffectOnly"/>

                        </td>
                    </tr>
                </form>
                </table>





            </div>
        </div>
        <p>



        </p>

    </body> 
</html>




