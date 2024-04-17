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
   $opt = $conn -> query("SELECT * FROM building");

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
      
       ?>
       </table>
  </body>
</html>