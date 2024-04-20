<!DOCTYPE html>
<html>
  <head><title>CSC355 Project Details Page</title>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({key: "AIzaSyDJ1hTb9kNjdiqVJUFmyp4dVEczkOr-49I", v: "weekly"});</script>
  <style>
    #map {height: 600px; width: auto;}

  </style>
</head>
  
  <?php 
  $dbhost = "localhost";
  $dbuser = "viewer";
  $dbpass = "\$MUs8ints1";
  $db = "LocationDB";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  $sid = $_GET['id'];
  $id = intval($sid);
  $opt = $conn -> query("SELECT * FROM building WHERE id = $id");
  $row = mysqli_fetch_assoc($opt);
  ?>
  <body>
    <h1>Details on your selected building!</h1>
    <table border="1">
        <tbody>
            <tr>
                <th>Building Name</th>
                <th>Building Address</th>
                <th>Building Latitude</th>
                <th>Building Longtitude</th>
                <th>Building Purpose</th>

            </tr>
            <tr>
                <td><?php echo($row['name']);?></td>
                <td><?php echo($row['address']);?></td>
                <td><?php echo($row['latitude']);?></td>
                <td><?php echo($row['longitude']);?></td>
                <td><?php echo($row['purpose']);?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="Delete.php?id='<?php echo($row['id']); ?>'">Link to delete page!</a><br>
    <script>
      let map;
      // Initialize and add the map
      
        async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");
        const {AdvancedMarkerElement} = await google.maps.importLibrary("marker");
        map = new Map(document.getElementById("map"), {
        center: { lat: <?php echo($row['latitude'])?>, lng: <?php echo($row['longitude'])?> },
        zoom: 18,
        });
        new google.maps.Marker({
        map: map, 
        position: { lat: <?php echo($row['latitude'])?>, lng: <?php echo($row['longitude'])?> },
        title: "<?php echo($row['name']);?>",
        });
      
    }
    
    initMap();

    </script>

  <div id="map"></div>
  

</body>
</html>