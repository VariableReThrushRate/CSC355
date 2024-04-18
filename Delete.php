<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="style.css"/>

  <style>

  </style>
<link type="text/css" rel="stylesheet" href="style.css"/>
  <?php
    $dbhost = "localhost";
    $dbuser = "viewer";
    $dbpass = "\$MUs8ints1";
    $db = "LocationDB";
    $id = $_GET['id'];
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    $opt = $conn -> query("SELECT * FROM building WHERE id = $id");
    $row = mysqli_fetch_assoc($opt);
   ?>
</head>
<body>
  <h1>Delete building: <?php echo($row['name']); ?>?</h1>
  <h1>Building Search area!</h1>
  <form id="DelForm" onsubmit="bug(this); return false;">
    <input type="hidden" id="confirm" name="confirm" value="1">
    <input type="hidden" id="id" name="id" value="<?php echo($id)?>">
    <input type="submit" name="submit" value="Dew it"/>
  </form>
  <div id="response"></div>
  <script>
    function bug(e){
      console.log("Clicked!");
      
        //var formData = new FormData(bruh);
        console.log("Defining form data!");
        var formData = new FormData(document.getElementById("DelForm"));
        console.log("Making request!");
        var xhr = new XMLHttpRequest();
        console.log("Request opening!");
        xhr.open("POST", "del.php", true);
        console.log("Request opened!");
        xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          console.log(xhr.responseText);
          document.getElementById('response').innerHTML = xhr.responseText;}
        xhr.send(formData);
      
      }
    }
  </script>
</body>
</html>