<?php

  header("Content-type: image/jpeg");

  $conn = mysqli_connect("localhost", "21904889", "mysqluser", "db4_21904889");

  $sql = "SELECT Image FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["Image"];
  echo $jpg;
?>
