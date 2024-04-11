<!DOCTYPE html>
<html>
  <head><title>CSC355 Project Details Page</title></head>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <style>
    
  </style>
  <?php 
  function OpenCon()
  {
  $dbhost = "localhost";
  $dbuser = "viewer";
  $dbpass = "\$MUs8ints1";
  $db = "LocationDB";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
  }
  $conn <- OpenCon();
  $id = 0;
  $opt = $conn -> query("SELECT * FROM building WHERE id = $id");
  $row = mysqli_fetch_assoc($opt);
  ?>
  <body>
    <h1>Details on your selected buulding!</h1>
    <table border="1">
        <tbody>
            <tr>
                <th>Building Name</th>
                <th>Building Address</th>
                <th>Building Longtitude</th>
                <th>Building Latitude</th>
                <th>Building Purpose</th>

            </tr>
            <tr>
                <td><?php echo($row[1]);?></td>
                <td><?php echo($row[2]);?></td>
                <td><?php echo($row[3]);?></td>
                <td><?php echo($row[4]);?></td>
                <td>Academic Instruction</td>
            </tr>
        </tbody>
    </table>
    <br/>
    <img width="600" height="auto" src="https://formacc.com/wp-content/uploads/2014/01/HH-SMU.jpg" alt="Image of Harned Hall" title="Harned Hall">
  </body>
</html>