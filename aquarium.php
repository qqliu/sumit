<!DOCTYPE HTML>

<html>
  <head>
    <title>Aquarium</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/aquarium.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/aquarium.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Aquarium</h1>
    </div>
    <div id="aquarium-problems">
        <ol>
            <form action="aquarium.php?num[]=aquariumcheck" method="post">
                <li>Answer: <input type="text" value="" name="aquarium-input-1"></li>
                <li>Answer: <input type="text" value="" name="aquarium-input-2"></li>
                <li>Answer: <input type="text" value="" name="aquarium-input-3"></li>
                <li>Answer: <input type="text" value="" name="aquarium-input-4"></li>
                <li>Answer: <input type="text" value="" name="aquarium-input-5"></li>
                <li>Answer: <input type="text" value="" name="aquarium-input-6"></li>
                <br>
              <input id="aquarium-submit" type="submit">
            </form>
        </ol>
        <?php
          include ("aquariumprobs.php");                                    
        ?>
  </body>
</html>