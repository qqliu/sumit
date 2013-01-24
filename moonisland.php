<!DOCTYPE HTML>

<html>
  <head>
    <title>Moon Island</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/moonisland.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Moon Island</h1>
    </div>
    <div id="problems">
        <ol>
            <p>Please write the answers in their corresponding boxes.</p>
            <form action="moonisland.php?" method="post">
                <li><input type="text" value="" name="moon-input-1"></li>
                <li><input type="text" value="" name="moon-input-2"></li>
                <li><input type="text" value="" name="moon-input-3"></li>
                <li><input type="text" value="" name="moon-input-4"></li>
                <li><input type="text" value="" name="moon-input-5"></li>
                <li><input type="text" value="" name="moon-input-6"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("moonislandprobs.php");                                    
        ?>
  </body>
</html>