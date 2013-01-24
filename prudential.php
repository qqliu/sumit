<!DOCTYPE HTML>

<html>
  <head>
    <title>Prudential</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>

    <script src="scripts/functions.js"></script>
    <script src="scripts/prudential.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Prudential</h1>
    </div>
    <div id="problems">
        <ol>
            <p>Please simplify all answers to a fraction in lowest terms. Enter all fractions with a blackslash "/".</p>
            <form action="prudential.php?" method="post">
                <li><input type="text" value="" name="prudential-input-1"></li>
                <li><input type="text" value="" name="prudential-input-2"></li>
                <li><input type="text" value="" name="prudential-input-3"></li>
                <li><input type="text" value="" name="prudential-input-4"></li>
                <li><input type="text" value="" name="prudential-input-5"></li>
                <li><input type="text" value="" name="prudential-input-6"></li>
                <li><input type="text" value="" name="prudential-input-7"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("prudentialprobs.php");                                    
        ?>
  </body>
</html>