<?php
    $db = mysqli_connect ("intweb.bucks.ac.uk", "21904889", "mysqlpassword", "db4_21904889");

    //Obtain the file sent to the server withing the response.
    $image = $_FILES['monsterimage']['tmp_name'];
    $audio = $_FILES['monsteraudio']['tmp_name'];

    //Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

    $sql = "INSERT INTO monster";
    $sql .= "(Name, Image, Audio)";
    $sql .= "VALUES ('$_POST[txtname]', $imagedata, $audiodata);";

    $result = mysqli_query($sql, $db);

    mysqli_close();
    
?>