<!DOCTYPE html>

  <head>
    <title>SUMiT 2013</title>
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css" />
    <script src="scripts/functions.js"></script>
    <script src="scripts/index.js"></script>
  </head>

  <body onload="onLoad();">
   <div id="journey-map">
    <div id="top-panel-wrapper">
      <h1 class="center-title">Helicopter Guidance Control Panel</h1>
    </div>
      <div id = "map">
        <img src="images/journey.gif" width="1340" height="614" alt="Helicopter Journey Map" usemap="#journeymap">
          <map name="journeymap">
            <area shape="rect" coords="155,257,247,366" href="worldend.php" alt="World's End" title="World's End"    />
            <area shape="rect" coords="307,192,399,301" href="longisland.php" alt="Long Island" title="Long Island"    />
            <area shape="rect" coords="307,322,399,431" href="moonisland.php" alt="Moon Island" title="Moon Island"    />
            <area shape="rect" coords="461,263,553,399" href="art.php" alt="Institute of Contemporary Art" title="Institute of Contemporary Art"    />
            <area shape="rect" coords="618,192,710,303" href="chinatown.php" alt="Chinatown" title="Chinatown"    />
            <area shape="rect" coords="618,323,710,434" href="aquarium.php" alt="Aquarium" title="Aquarium"    />
            <area shape="rect" coords="773,9,865,120" href="logan.php" alt="Logan Airport" title="Logan Airport"    />
            <area shape="rect" coords="773,255,865,366" href="hall.php" alt="Faneuil Hall" title="Faneuil Hall"    />
            <area shape="rect" coords="761,498,876,609" href="uss.php" alt="USS Constitution" title="USS Constitution"    />
            <area shape="rect" coords="927,258,1021,369" href="garden.php" alt="Public Garden" title="Public Garden"    />
            <area shape="rect" coords="1082,191,1174,302" href="prudential.php" alt="Prudential" title="Prudential"    />
            <area shape="rect" coords="1082,320,1174,431" href="hancock.php" alt="John Hancock" title="John Hancock"    />
          </map>
        <div id="helicopter"><img src="images/helicopter.png" width="89px" height="110px"/></div>
        <div id="mit"><img src="images/mit.png" width="90px" height="115px"/></div>
        <div id="world-end-activated"><img src="images/worldend.png" width="89px" height="110px"/></div>
        <div id="long-island-activated"><img src="images/longisland.png" width="89px" height="110px"/></div>
        <div id="moon-island-activated"><img src="images/moonisland.png" width="89px" height="110px"/></div>
        <div id="art-activated"><img src="images/art.png" width="95px" height="135px"/></div>
        <div id="chinatown-activated"><img src="images/chinatown.png" width="89px" height="110px"/></div>
        <div id="aquarium-activated"><img src="images/aquarium.png" width="91px" height="114px"/></div>
        <div id="logan-airport-activated"><img src="images/logan.png" width="91px" height="114px"/></div>
        <div id="faneuil-hall-activated"><img src="images/hall.png" width="95px" height="114px"/></div>
        <div id="public-garden-activated"><img src="images/garden.png" width="95px" height="114px"/></div>
        <div id="prudential-activated"><img src="images/prudential.png" width="95px" height="114px"/></div>
        <div id="john-hancock-activated"><img src="images/hancock.png" width="95px" height="114px"/></div>
      </div>
  </body>
</html>