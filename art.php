<!DOCTYPE HTML>

<html>
  <head>
    <title>Institute of Contemporary Art</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/art.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/art.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Institute of Contemporary Art</h1>
    </div>
    <div id="problems">
        <form action="art.php?num[]=artcheck" method="post">
            <p>Please input answer below.</p>
            <input type="text" value="" name="art-input-1">
            <br><br>
            <input id="submit" type="submit">
        </form>
        <?php
          include ("artprobs.php");                                    
        ?>
  </body>
</html>