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
$name <- $_POST['buildName'];
$add <- $_POST['buildAdd'];
$long <- $_POST['buildLong'];
$lat <- $_POST['buildLat'];
$purpose <- $_POST['buildName'];
$conn <- OpenCon();
$opt = $conn -> query("INSERT INTO building VALUES ($name), ($add), ($lat), ($long), ($purpose)");
