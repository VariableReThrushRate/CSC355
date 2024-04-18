<!DOCTYPE html>
<html>
<head>
<title>CSC355 Project Details Page</title>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({key: "AIzaSyDJ1hTb9kNjdiqVJUFmyp4dVEczkOr-49I", v: "weekly"});</script>
  <style>
    #map {height: 600px; width: auto;}

  </style>
  
  <?php 
  $dbhost = "localhost";
  $dbuser = "viewer";
  $dbpass = "\$MUs8ints1";
  $db = "LocationDB";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  $opt = $conn -> query("SELECT name, latitude, longitude FROM building");
  $avlat = 0;
  $avlong = 0;
  $count = 0;
  if ($opt != null) { 
    $opt->data_seek(0);
    while($row = mysqli_fetch_assoc($opt)) {
      $avlat = $avlat + floatval($row['latitude']);
      $avlong = $avlong + floatval($row['longitude']);
      $count = $count + 1;
    }
    $reslat = $avlat / $count;
    $reslong = $avlong / $count;
    $opt->data_seek(0);
    error_log("reslat: " . $reslat . " reslong: " . $reslong . " count: " . $count);

}
  ?>
</head>
<body>
<script>
      let map;
      // Initialize and add the map
      
        async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");
        const {AdvancedMarkerElement} = await google.maps.importLibrary("marker");
        map = new Map(document.getElementById("map"), {
        center: { lat: <?php echo($reslat)?>, lng: <?php echo($reslong)?> },
        zoom: 18,
        });
        <?php
         if ($opt != null) { 
          while($row = mysqli_fetch_assoc($opt)) {
            echo('new google.maps.Marker({');
            echo('map: map,');
            echo('position: { lat:  ' . $row['latitude'] . ', lng:' . $row['longitude'] .  '},');
            echo('title: "' . $row['name'] . '",');
            echo('});');
          }
        }
         ?>
        
      
    }
    
    initMap();

    </script>

  <div id="map"></div>
</body>
</html>