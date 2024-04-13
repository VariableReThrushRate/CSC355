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
$add <- "placeholder";
$long <- "placeholder";
$lat <- "placeholder";
$purpose <- "placeholder";
$conn <- OpenCon();
$opt = $conn -> query("INSERT INTO building VALUES ($name), ($add), ($long), ($lat), ($purpose)");
