<!DOCTYPE html>
<html>
  <head><title>CSC355 Project Main Page Test</title></head>
  <style>
    
  </style>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <?php
   $dbhost = "localhost";
   $dbuser = "viewer";
   $dbpass = "\$MUs8ints1";
   $db = "LocationDB";
   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   $opt = $conn -> query("SELECT id, name, address, latitude, longitude FROM building");

   ?>
  <body>
  <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    <table border="1">
       <tr>
              <th>Building Name</th>
              <th>Building Address</th>
              <th>Building Latitude</th>
              <th>Building Longitude</th>
       </tr>
      <?php

      if ($opt != null) {
      
          while($row = mysqli_fetch_assoc($opt)) {
              echo '<tr>';
              echo '<td>' . $row['name'] . '</td>';
              echo '<td>' . $row['address'] . '</td>';
              echo '<td>' . $row['latitude'] . '</td>';
              echo '<td>' . $row['longitude'] . '</td>';
              echo '</tr>';
          }
      
      }
       ?>
       </table>
  </body>
</html>