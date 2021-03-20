<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect("localhost", "21904889"," mysqlpassword ", "db4_21904889");

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>

