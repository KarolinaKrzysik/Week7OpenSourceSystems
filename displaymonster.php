<?php

  $conn = mysqli_connect("localhost", "21904889", "mysqluser", "db4_21904889");

  $sql = "select id from monster;";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  echo "<img src='getjpg.php?id=" . $row[id]. "' />";

  mysqli_close();
?>

