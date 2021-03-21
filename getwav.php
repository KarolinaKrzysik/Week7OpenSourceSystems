<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect("localhost", "21904889", "mysqluser", "db4_21904889");

  $sql = "SELECT Audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["Audio"];

  echo $audio;
?>

