<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("127.0.0.1", "viewer", "\$MUs8ints1", "LocationDB");
$name = $_POST['Search'];
$opt = $conn -> query("SELECT * FROM building WHERE name LIKE $name");
if(!$opt)
{
    echo mysqli_error($conn);
    die();
}
else
{
    echo "Query succesfully executed!";
} 
mysqli_close($conn); 