<!DOCTYPE HTML>

<html>
  <head>
    <title>Prudential</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/prudential.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/prudential.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Prudential</h1>
    </div>
    <div id="prudential-problems">
        <ol>
            <form action="prudential.php?num[]=prudentialcheck" method="post">
                <li>Answer: <input type="text" value="" name="prudential-input-1"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-2"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-3"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-4"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-5"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-6"></li>
                <li>Answer: <input type="text" value="" name="prudential-input-7"></li>
                <br>
              <input id="prudential-submit" type="submit">
            </form>
        </ol>
        <?php
          include ("prudentialprobs.php");                                    
        ?>
  </body>
</html>