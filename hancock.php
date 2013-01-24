<!DOCTYPE HTML>

<html>
  <head>
    <title>John Hancock</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>

    <script src="scripts/functions.js"></script>
    <script src="scripts/hancock.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">John Hancock</h1>
    </div>
    <div id="problems">
        <ol>
          <p>Please input answers in corresponding slots.</p>
          <form action="hancock.php?" method="post">
            <li><input type="text" value="" name="hancock-input-1"></li>
            <li><input type="text" value="" name="hancock-input-2"></li>
            <li><input type="text" value="" name="hancock-input-3"></li>
            <li><input type="text" value="" name="hancock-input-4"></li>
            <li><input type="text" value="" name="hancock-input-5"></li>
            <li><input type="text" value="" name="hancock-input-6"></li>
            <li><input type="text" value="" name="hancock-input-7"></li>
            <li><input type="text" value="" name="hancock-input-8"></li>
                <br>
              <input id="submit" type="submit">
            </form>
        </ol>
        <?php
          include ("hancockprobs.php");                                    
        ?>
  </body>
</html>