
<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost", "Cerberus", "R3GZ*Z3tA*Plu5", "LocationDB");
$name = $_POST['buildName'];
$add = $_POST['buildAddress'];
$long = $_POST['buildLongitude'];
$lat = $_POST['buildLatitude'];
$purpose = $_POST['buildPurpose'];
$conn <- OpenCon();
$opt = $conn -> query("INSERT INTO building VALUES ($name), ($add), ($lat), ($long), ($purpose)");
#$opt = "($name), ($add), ($lat), ($long), ($purpose)";
#echo("Opt Result: " . $opt);
if(!$opt)
{
    echo mysqli_error($conn);
    die();
}
else
{
    echo "Query succesfully executed!";
} 