<!DOCTYPE HTML>

<html>
  <head>
    <title>Public Garden</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/garden.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/garden.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Public Garden</h1>
    </div>
    <div id="problems">
        <ol>
          <p>Please enter answers below.</p>
          <form action="garden.php?" method="post">
            <li><input type="text" value="" name="garden-input-1"></li>
            <li><input type="text" value="" name="garden-input-2"></li>
            <li><input type="text" value="" name="garden-input-3"></li>
            <li><input type="text" value="" name="garden-input-4"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("gardenprobs.php");                                    
        ?>
  </body>
</html>