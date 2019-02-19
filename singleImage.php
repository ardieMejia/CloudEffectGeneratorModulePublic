<?php

// ------------------------------ later this whole section can be an separate file ------------------------------

include "./includes/db_connect.php";
// mysql commands not case-sensitive, so doesnt matter
$queryString="select * from images order by id desc";


try{
    $prepared=$conn->prepare($queryString);
    $prepared->execute();
    $res=$prepared->setFetchMode(PDO::FETCH_ASSOC);
    $wait=$prepared->fetchAll();
    $filename=$wait[0]['filename'];
}
// PDOException is an object, I guess its worth to commit that to memory....
// wow, this is boring...
catch(PDOException $error){
    echo "the PDOException error is".$error->getMessage();
}

// ------------------------------ later this whole section can be an separate file ------------------------------




$folderString="./uploads/";
$completeFileString=$folderString.$filename;
$size=getimagesize($completeFileString);
$var1=preg_split("/[\/]/",$completeFileString);
 echo $completeFileString;




?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="src-css/Skeleton-2.0.4/css/slightskeleton.css">
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

                    <table>

                        <tr>
                            <td>
                                previous

                            </td>
                            <td>
                                up

                            </td>
                            <td>
                                next

                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a href="./about.html" class="button">About</a>
                            </td>
                        </tr>
                        
                        <tr>

                            <td colspan="3">
                                <a href="./forum.html" class="button">Help Forum</a>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="3">
                                <a href="./contact.html" class="button">Contact</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a href="./language.html" class="button">Language</a>
                            </td>
                        </tr>


                    </table>
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
                            <td>
                                Your uploaded image</br></br>
                                <input type="submit" class="button button-active" value="process effects (PHP)"  id="oneEffectOnly"/>
                            </td>
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



                <form method="POST" action="getdata.php" enctype="multipart/form-data">
                    <input type="file" name="myimage">
                    <input type="submit" name="submit_image" value="Upload">
                </form>

            </div>
        </div>
        <p>



        </p>

    </body> 
</html>




