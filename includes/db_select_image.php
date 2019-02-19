<?php

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


?>
