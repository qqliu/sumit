<!DOCTYPE HTML>

<html>
  <head>
    <title>Long Island</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/longisland.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/longisland.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Long Island</h1>
    </div>
    <div id="problems">
        <ol>
            <p>Please input answers in the corresponding boxes.</p>
            <form action="longisland.php?" method="post">
                <li><input type="text" value="" name="island-input-1"></li>
                <li><input type="text" value="" name="island-input-2"></li>
                <li><input type="text" value="" name="island-input-3"></li>
                <li><input type="text" value="" name="island-input-4"></li>
                <li><input type="text" value="" name="island-input-5"></li>
                <li><input type="text" value="" name="island-input-6"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("longislandprobs.php");                                    
        ?>
  </body>
</html>