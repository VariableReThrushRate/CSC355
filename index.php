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
    <h1>Welcome to our site!</h1>
    <p1>The purpose of this site is to chronicle all the buildings related to Saint Martin's University.<br>
    Here you can <a href="Building_Search.html">Search for buildings</a>, <a href="Map.php">Check out our map with every site</a>, or check out this page with every buidling listed. <br>
    Feel free to check out each building's details, or <a href="Building_Form.html">Insert your own!</a>
    <table border="1">
       <tr>
              <th>Building Name</th>
              <th>Building Address</th>
              <th>Building Latitude</th>
              <th>Building Longitude</th>
              <th>Building Info Link</th>
       </tr>
      <?php

      if ($opt != null) {
      
          while($row = mysqli_fetch_assoc($opt)) {
              echo '<tr>';
              echo '<td>' . $row['name'] . '</td>';
              echo '<td>' . $row['address'] . '</td>';
              echo '<td>' . $row['latitude'] . '</td>';
              echo '<td>' . $row['longitude'] . '</td>';
              echo '<td><a href="buildinfo.php?id=' . $row['id'] . '">Details Page</a></td>';
              echo '</tr>';
          }
      
      }
       ?>
       </table>
  </body>
</html>