<?php
	// get the value of the edge from the textfield
	$edge = $_POST['edge'];

	// calculate the volume and surface area of an octahedron
	$volume = (sqrt(2)/3)*($edge**3);
  $area = 2*sqrt(3)*($edge**2);
  $volumeRounded = number_format ($volume, 2);
  $areaRounded = number_format ($area, 2);
?>
<!-- Answers -->
  The volume is <?php echo "$volumeRounded"; ?>cm<sup>3</sup>, and the surface area is <?php echo "$areaRounded"; ?>cm<sup>2</sup>.