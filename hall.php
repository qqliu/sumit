<!DOCTYPE HTML>

<html>
  <head>
    <title>Faneuil Hall</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/hall.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Faneuil Hall</h1>
    </div>
    <div id="problems">
        <ol>
          <p>Please input answers in corresponding spots.</p>
            <form action="hall.php?" method="post">
                <li><input type="text" value="" name="hall-input-1"></li>
                <li><input type="text" value="" name="hall-input-2"></li>
                <li><input type="text" value="" name="hall-input-3"></li>
                <li><input type="text" value="" name="hall-input-4"></li>
                <li><input type="text" value="" name="hall-input-5"></li>
                <li><input type="text" value="" name="hall-input-6"></li>
                <li><input type="text" value="" name="hall-input-7"></li>
                <li><input type="text" value="" name="hall-input-8"></li>
                <li><input type="text" value="" name="hall-input-9"></li>
                <li><input type="text" value="" name="hall-input-10"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("hallprobs.php");                                    
        ?>
  </body>
</html>