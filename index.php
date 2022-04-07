<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta name="description" content="Area and Perimeter, with JavaScript" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Anita Kay" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Title -->
    <title>Assignment 02</title>
  </head>
	<body>
    <br>
    <!-- MDL Progress Bar with Indeterminate Progress -->
    <center><div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </script></center>
    <?php 
      echo "<center><h1>Calculate the Volume and Surface Area of an Octahedron</h1></center>"; 
    ?>
    <center><img src="./images/octahedron.jpg"></center>
    <?php
      echo "<center><h3>Please enter the length of the edge here:</h3></center>"; 
    ?>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBase>Edge (cm):</label>
      <input type="text" id="base" placeholder="Enter the edge (cm)" name="edge"><br>
      <input type="submit" value="Calculate">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <!-- Description of an octahedron -->
    <?php 
      echo "<center><h6>An octahedron is a polyhedron that has six vertices, eight faces, and twelve edges. It is formed by connected the bases of two pyramids together. The volume and surface area of an octahedron can be calculated using the value of only one edge.</h6></center>";
    ?>
    <br></br>
    <center><img src="./images/plant.jpg" width=13.5%><img src="./images/dice.jpg" width=13.5%><img src="./images/rubiks.jpg" width=13.5%><img src="./images/crystal.jpg" width=11.5%></center>
    <?php
      echo "<center><h6>Show how interesting you think octahedrons are using this slider:</h6></center>";
    ?>
    <!-- Default Slider -->
    <input class="mdl-slider mdl-js-slider" type="range"
     min="0" max="100" value="0" tabindex="0">
    <br>
    <br>
  </body>
</html>