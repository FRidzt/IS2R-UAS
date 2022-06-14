<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Website UAS</title>
    <link rel = "stylesheet" href = "style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    
    <ul>
    	<li><a href="logout.php">Logout</a> </li>
      <li><a href = "home.php" > Introduction </a /li>
        <li class = "dropdown">
          <a href = "#" class = "dropbutton"> Feature </a>
          <div class = "dropdownList">
            <a href= "bmi.html" > BMI </a>
            <a href= "kalori.html" > Kalori </a>
            <a href= "jantung.html"> Denyut Jantung Istirahat </a>
            <a href= "tpg.html" > Tinggi Potensi Genetik </a>
          
          </div>
        </li>
        <li><a href="form_upload.php">Upload Gambar</a> </li>
    </ul>
    
    <div id class = "introduction">
      <h1><b>Anggota Kelompok</b></h1> <br>
      
    <div class = "perkenalan">
      <script src="intro.js"></script>
    </div>
       
       </br>
      
       <p> Presentasi: </p>
    </div>

      <div class = "video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oUaIsx7w8SU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      

    
  </body>
</html>