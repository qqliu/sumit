<!DOCTYPE HTML>

<html>
  <head>
    <title>Chinatown</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/chinatown.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/chinatown.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Chinatown</h1>
    </div>
    <div id="problems">
        <div class = "imagewrapper">
        </div>
        <p>Please input activation code below.</p>
        <form action="chinatown.php?" method="post">
            <input type="text" value="" name="chinatown-input-1">
            <br><br>
            <input id="submit" type="submit">
        </form>
        <?php
          include ("chinatownprobs.php");                                    
        ?>
  </body>
</html>