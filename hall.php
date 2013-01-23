<!DOCTYPE HTML>

<html>
  <head>
    <title>Faneuil Hall</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/hall.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/hall.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Faneuil Hall</h1>
    </div>
    <div id="hall-problems">
        <ol>
            <form action="hall.php?num[]=hallcheck" method="post">
                <li>Answer: <input type="text" value="" name="hall-input-1"></li>
                <li>Answer: <input type="text" value="" name="hall-input-2"></li>
                <li>Answer: <input type="text" value="" name="hall-input-3"></li>
                <li>Answer: <input type="text" value="" name="hall-input-4"></li>
                <li>Answer: <input type="text" value="" name="hall-input-5"></li>
                <li>Answer: <input type="text" value="" name="hall-input-6"></li>
                <li>Answer: <input type="text" value="" name="hall-input-7"></li>
                <li>Answer: <input type="text" value="" name="hall-input-8"></li>
                <li>Answer: <input type="text" value="" name="hall-input-9"></li>
                <li>Answer: <input type="text" value="" name="hall-input-10"></li>
                <br>
              <input id="hall-submit" type="submit">
            </form>
        </ol>
        <?php
          include ("hallprobs.php");                                    
        ?>
  </body>
</html>