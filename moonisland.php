<!DOCTYPE HTML>

<html>
  <head>
    <title>Moon Island</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/moonisland.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/moonisland.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Moon Island</h1>
    </div>
    <div id="moon-island-problems">
        <div class = "imagewrapper">
          <img id = "moon-check-1" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-1" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "moon-check-2" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-2" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "moon-check-3" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-3" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "moon-check-4" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-4" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "moon-check-5" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-5" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "moon-check-6" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "moon-cross-6" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
        </div>
        <ol>
            <li>The point C is the center of a circle with radius 6 units.  An L-shaped path is drawn starting at the center C and moving to the right 3 units, then vertically up to the perimeter of the circle.  This L-shape is repeated by starting at C and moving out 3 units along the radial line that makes a 30 degree angle with the horizontal, turning left 90 degrees, and continuing to the perimeter of the circle.  See the figure below.  What is the area of the shaded region in units of  square units?</li>
            <form action="moonisland.php?num[]=moonislandcheck" method="post">
                Answer: <input type="text" value="" name="moon-input-1">
            <li>A “lattice point” is a point in the coordinate plane whose coordinates are integers.  A “lattice polygon” is a polygon whose vertices are lattice points.  Pick’s Theorem says that the area of a lattice polygon is equal to i+b2-1, where i is the number of lattice points in the interior of the polygon and b is the number of lattice points on the perimeter of the polygon.  What is the area of the following lattice polygon?</li>
                Answer: <input type="text" value="" name="moon-input-2">
            <li>What is the area of the pentagon whose vertices are located at (103, 3), (107, 4), (109, 10.5), (105, 12), (100, 6)?</li>
                Answer: <input type="text" value="" name="moon-input-3">
            <li>How many interior points are there in the lattice nonagon whose vertices are (3, 0), (25, 3), (21, 20), (23, 27), (0, 40), (-23, 27), (-21, 20), (-25, 3), (-2,0) in counterclockwise order?</li>
                Answer: <input type="text" value="" name="moon-input-4">
            <li>What does this tell you about the 3D solid whose vertices are A, B, C, and D?</li>
                Answer: <input type="text" value="" name="moon-input-5">
            <li>Define a map from the sphere to the cylinder by sending a point P on the sphere to the point where the ray that starts on and is perpendicular to the axis of the cylinder and passes through P intersects the surface of cylinder. </li>
                Answer: <input type="text" value="" name="moon-input-6">
                <br>
              <input id="moon-island-submit" type="submit">
            </form>
        </ol>
        <?php
          include ("moonislandprobs.php");                                    
        ?>
  </body>
</html>