<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("127.0.0.1", "viewer", "\$MUs8ints1", "LocationDB");
$name = $_POST['Search'];
$opt = $conn -> query("SELECT * FROM building WHERE name LIKE %$name%");
if(!$opt)
{
    echo mysqli_error($conn);
    die();
}
else
{
  echo('table border="1">');
  echo('<tr>');
  echo('       <th>Building Name</th>');
  echo('       <th>Building Address</th>');
  echo('       <th>Building Latitude</th>');
  echo('       <th>Building Longitude</th>');
  echo('</tr>');
 

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
 else {
  echo("<tr>");
  echo("<td>No Results found!</td><td></td><td></td><td></td>");
  echo("</tr>");
 }
  
  echo('</table>');
} 
mysqli_close($conn); 