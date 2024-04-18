<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("127.0.0.1", "Cerberus", "R3GZ*Z3tA*Plu5", "LocationDB");
$id = $_POST['id'];
$confirm = $_POST['confirm'];
#$opt = "($name), ($add), ($lat), ($long), ($purpose)";
#echo("Opt Result: " . $opt);
if($confirm == '1' || $confirm == 1)
{
  $opt = $conn -> query("DELETE FROM building WHERE id = $id");
  echo("Deletion ran, ensure all is functioning as intended.");
}
else
{
  echo "No confirmation.";
} 
mysqli_close($conn); 