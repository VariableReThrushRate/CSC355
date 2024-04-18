<?php
echo("made it to sql");
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("127.0.0.1", "Cerberus", "R3GZ*Z3tA*Plu5", "LocationDB");
echo("found ID");
$id = $_POST['id'];
echo("found confirm");
$confirm = $_POST['confirm'];
#$opt = "($name), ($add), ($lat), ($long), ($purpose)";
#echo("Opt Result: " . $opt);
if($id == '1' || $id == 1)
{
  echo("Made it to query");
  $opt = $conn -> query("DELETE FROM building WHERE id = $id");
  echo("Deletion ran, ensure all is functioning as intended.");
}
else
{
  echo "No confirmation.";
} 
mysqli_close($conn); 