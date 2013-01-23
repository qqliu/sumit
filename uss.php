<!DOCTYPE HTML>

<html>
  <head>
    <title>USS Constitution</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/uss.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/uss.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">USS Constitution</h1>
    </div>
    <div id="uss-problems">
        <form action="uss.php?num[]=usscheck" method="post">
            Please check the correct remainders:
            <input type="checkbox" name="uss-input[]" value="0" />0
            <input type="checkbox" name="uss-input[]" value="1" />1
            <input type="checkbox" name="uss-input[]" value="2" />2
            <input type="checkbox" name="uss-input[]" value="3" />3
            <input type="checkbox" name="uss-input[]" value="4" />4
            <input type="checkbox" name="uss-input[]" value="5" />5
            <input type="checkbox" name="uss-input[]" value="6" />6
            <input type="checkbox" name="uss-input[]" value="7" />7
            <input type="checkbox" name="uss-input[]" value="8" />8
            <input type="checkbox" name="uss-input[]" value="9" />9
            <input type="checkbox" name="uss-input[]" value="10" />10
            <input type="checkbox" name="uss-input[]" value="11" />11
            <input type="checkbox" name="uss-input[]" value="12" />12
            <br>
            <input id="uss-submit" type="submit">
        </form>
        <?php
          include ("ussprobs.php");                                    
        ?>
  </body>
</html>