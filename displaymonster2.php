<html>
  <head></head>
  <body>

    <?php
      //Connect to the server
      $conn = mysqli_connect("localhost", "21904889", "mysqluser", "db4_21904889");
      $sql = "select id, Name from monster;";
      //Catch query result
      $result = mysqli_query($conn, $sql);
      //Display table header
      echo "<table align = 'center' border = '1'>";
        echo "<tr>
          <th width = '200' align = 'left'>ID</th>
          <th width = '200' align = 'left'>Name</th>
          <th>Audio</th>
          <th>Image</th>
        </tr>";
        //Display data from database
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>
            <td>$row[id]</td>
            <td>$row[Name]</td>
            <td><a href = 'getwav.php?id=$row[id]'>Click to play</a></td>
            <td><img src='getjpg.php?id=$row[id]' height = '100' width = '100'/></td>
          </tr>";
        }
      echo "</table>";
      mysqli_close();
    ?>
  </body>
</html>

