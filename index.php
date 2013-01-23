<!DOCTYPE html>

  <head>
    <title>SUMiT 2013</title>
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css" />
    <script src="scripts/functions.js"></script>
    <script src="scripts/index.js"></script>
  </head>

  <body onload="onLoad();">
   <div id="journey-map">
    <h1 class="center-title">SUMiT Helicopter Paths</h1>
      <div id = "map">
        <img src="images/journey.gif" width="1500" height="688" alt="Helicopter Journey Map" usemap="#journeymap">
          <map name="journeymap">
            <area shape="rect" coords="176,289,278,409" href="worldend.php" alt="World's End"/>
            <area shape="rect" coords="346,215,449,337" href="longisland.php" alt="" title=""    />
            <area shape="rect" coords="348,362,450,487" href="moonisland.php" alt="" title=""    />
            <area shape="rect" coords="520,287,625,449" href="art.php" alt="" title=""    />
            <area shape="rect" coords="692,215,797,340" href="chinatown.php" alt="" title=""    />
            <area shape="rect" coords="694,362,797,490" href="aquarium.php" alt="" title=""    />
            <area shape="rect" coords="866,11,971,138" href="logan.php" alt="" title=""    />
            <area shape="rect" coords="866,289,973,416" href="hall.php" alt="" title=""    />
            <area shape="rect" coords="851,564,984,683" href="uss.php" alt="" title=""    />
            <area shape="rect" coords="1039,287,1141,413" href="garden.php" alt="" title=""    />
            <area shape="rect" coords="1212,215,1314,342" href="prudential.php" alt="" title=""    />
            <area shape="rect" coords="1211,361,1320,487" href="hancock.php" alt="" title=""    />
          </map>
        <div id="world-end-activated"><img src="images/worldend.png" width="101px" height="101px"/></div>
        <div id="moon-island-activated"><img src="images/worldend.png" width="101px" height="101px"/></div>
      </div>
  </body>
</html>