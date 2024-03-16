<!DOCTYPE html>
<html>
  <head><title>CSC355 Project Main Page Test</title></head>
  <style>
    
  </style>
  <link type="text/css" rel="stylesheet" href="style.css"/>
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
   ?>
  <body>
  <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    <table border="1">
       <tr>
        <th>Building Name</th>
              <th>Building Address</th>
              <th>Building Latitude</th>
              <th>Building Longitude</th>
       </tr>
      
       <tr>
              <td>Old Main</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.040700</td>
              <td>-122.815400</td>
              
       </tr>
    
       <tr>
            <td>O'Grady Library</td>
            <td>5000 Abbey Way SE, Lacey, WA 98503</td>
            <td>47.041028039927255</td>
            <td>-122.81644401829115</td>
            
       </tr>
            <td>Harned Hall</td>
            <td>5000 Abbey Way SE, Lacey, WA 98503</td>
            <td>47.040208993889685</td>
            <td>-122.81671221715227</td>
            
       </tr>
      
       <tr>
              <td>Cebula Hall (Engineering)</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.03933233049236</td>
              <td>-122.81654477387843</td>
              
       </tr>

       <tr>
             <td>Kreielsheimer Hall (Arts Education)</td>
             <td>5000 Abbey Way SE, Lacey, WA 98503</td>
             <td>47.04035205296114</td>
             <td>-122.8177538796822</td>
             
       <tr>

       <tr>
             <td>Panowicz Foundry (Engineering)</td>
             <td>5000 Abbey Way SE, Lacey, WA 98503</td>
             <td>-122.8186121865059</td>
             <td>47.041251362401674</td>
             
             
       <tr>
        
       <tr>
             <td>Charneski Recreation Center</td>
             <td>5000 Abbey Way SE, Lacey, WA 98503</td>
             <td>47.039175646907466</td>
             <td>-122.81843324177868</td>
             
       <tr>       

       <tr>
              <td>Ernsdorff Center (Mathematics)</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.04164694682293</td
              ><td>-122.81908091806486</td>
              
       <tr>       
       
       <tr>
              <td>Old Cebula Hall (Engineering)</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.039500040461725</td>
              <td>-122.81655310321464</td>
              
       <tr> 
       
       <tr>
             <td>Trautman Student Union Building</td>
             <td>5000 Abbey Way SE, Lacey, WA 98503</td>
             <td>47.039338094890454</td>
             <td>-122.81737764115579</td>
             
       <tr>             
      
       <tr>
              <td>Marcus Pavilion</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.0379381553391</td>
              <td>-122.81731461442438</td>
              
       <tr>
       
       <tr>
              <td>Baran Hall</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.04088630165792</td>
              <td>-122.81967280489508</td>
              
              
              
       <tr>

       <tr>
              <td>Burton Hall</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.040417814994</td>
              <td>-122.81923738993326</td>
              
       <tr>

       <tr>
              <td>Spangler Hall</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.040537819566204</td>
              <td>-122.8202446813863</td>
       <tr>
       
       <tr>
              <td>Parsons Hall</td>
              <td>5000 Abbey Way SE, Lacey, WA 98503</td>
              <td>47.03958000510115</td>
              <td>-122.8207650299286</td>
              
       <tr>
       <tr>
                <td>Heider Hall</td>
                <td>5000 Abbey Way SE, Lacey, WA 98503</td>
                <td>47.04415700453479</td>
                <td>-122.80735183427004</td>
                
       <tr>
       <tr>
                <td>SMU JBLM Campus</td>
                <td>851 Lincoln Blvd SW, McChord AFB, WA 98439</td>
                <td>47.122444120879386-122.50408046508258</td>
                <td>-122.50408046508258</td>
        <tr>       
        

       </table>
  </body>
</html>