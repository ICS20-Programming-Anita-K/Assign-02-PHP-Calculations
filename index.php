<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta name="description" content="Calculate the Volume and Surface Area of an Octahedron" />
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
    <title>Calculating Octahedrons</title>
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
      <label for=lblEdge>Edge (cm):</label>
      <input type="text" id="base" placeholder="Enter the edge (cm)" name="edge"><br>
      <input type="submit" value="Calculate">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <!-- Description of an octahedron -->
    <?php 
      echo "<center><h6>An octahedron is a polyhedron that has six vertices, eight faces, and twelve edges. It is formed by connecting the bases of two pyramids together. The volume and surface area of an octahedron can be calculated using the value of only one edge.</h6></center>";
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
    <?php
      echo "<center><h6>Can you think of any real world examples of octahedrons?</h6></center>";
    ?>
    <center><label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
        <span class="mdl-radio__label">Yes</span>
      </label>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
      <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
      <span class="mdl-radio__label">No</span>
      </label></center>
    <?php
      echo "<center><h6>Write anything you can think of here:</h6></center>";
    ?>
    <!-- Simple Textfield -->
    <form action="#">
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Example...</label>
      </div>
    </form>
    <br>
    <br>
  </body>
</html>