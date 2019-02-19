<?php

include "./includes/db_connect.php";

$statusMessage='';

$targetDir="./uploads/";

// so every programmer is still retarded..
// so this is apparently just 1 dimesnioal array, made to look super complex, whatever...
// its 1 dimensional array once you access the 1st and only associate index/key

// you can actually use basename, ive been doing this the hard way with preg (regular expressions, extremely powerful, but confusing)
// this is much simpler, and pleasant I guess

$fileName=basename($_FILES["imagefile"]["name"]);
$completeFilePath=$targetDir.$fileName;
$fileType=pathinfo($completeFilePath,PATHINFO_EXTENSION);

if(isset($_POST["imagesubmit"]) && !empty($_FILES["imagefile"]["name"])){
    $allowedArray=array("jpg");
    if(in_array($fileType,$allowedArray)){
        // one line magic, good programmers use this a lot

        if(move_uploaded_file($_FILES["imagefile"]["tmp_name"],$completeFilePath)){
            $queryString="INSERT into images (filename) VALUES ('".$fileName."')";
            //            $res=$conn->query($queryString);
            $res=$conn->exec($queryString);
            if($res)
                $statusMessage="file inserted into database successfully";
            else
                $statusMessage="Something went wrong with the database query";
        }else{
            $statusMessage="something went wrong with the move_uploaded_file function";
        }
    }else
        $statusMessage="only jpeg filetype allowed for now, also make sure extension is renamed <b>jpg</b> instead of <b>jpeg</b>";
}else
    $statusMessage="no file selected";

echo $statusMessage;


?>
</br></br></br>
<h4>
    <a href="./singleImage.php">Proceed</a>
</h4>

