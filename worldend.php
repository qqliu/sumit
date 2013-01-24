<!DOCTYPE HTML>

<html>
  <head>
    <title>World's End</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/worldend.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/worldend.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">World's End</h1>
    </div>
    <div id="problems">
        <p>Please input answers in the boxes corresponding to each question.</p>
        <ol>
            <form action="worldend.php?" method="post">
                <li><input type="text" value="" name="end-input-1"></li>
                <li><input type="text" value="" name="end-input-2"></li>
                <li><input type="text" value="" name="end-input-3"></li>
                <li><input type="text" value="" name="end-input-4"></li>
                <li><input type="text" value="" name="end-input-5"></li>
                <li><input type="text" value="" name="end-input-6"></li>
                <li><input type="text" value="" name="end-input-7"></li>
                <li><input type="text" value="" name="end-input-8"></li>
                <li><input type="text" value="" name="end-input-9"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("worldendprobs.php");                                    
        ?>
  </body>
</html>