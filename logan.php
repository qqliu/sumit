<!DOCTYPE HTML>

<html>
  <head>
    <title>Logan Airport</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/logan.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Logan Airport</h1>
    </div>
    <div id="problems">
        <form action="logan.php?" method="post">
            Please check the correct remainders: <br><br>
            <div id="checkboxespics">
            <input type="checkbox" id="mycheckbox" name="uss-input[]" value="0" />0<label for="mycheckbox"></label>
            <input type="checkbox" id="mycheckbox1" name="uss-input[]" value="1" />1<label for="mycheckbox1"></label>
            <input type="checkbox" id="mycheckbox2" name="uss-input[]" value="2" />2<label for="mycheckbox2"></label>
            <input type="checkbox" id="mycheckbox3" name="uss-input[]" value="3" />3<label for="mycheckbox3"></label>
            <input type="checkbox" id="mycheckbox4" name="uss-input[]" value="4" />4<label for="mycheckbox4"></label>
            <input type="checkbox" id="mycheckbox5" name="uss-input[]" value="5" />5<label for="mycheckbox5"></label>
            <input type="checkbox" id="mycheckbox6" name="uss-input[]" value="6" />6<label for="mycheckbox6"></label>
            <input type="checkbox" id="mycheckbox7" name="uss-input[]" value="7" />7<label for="mycheckbox7"></label>
            <input type="checkbox" id="mycheckbox8" name="uss-input[]" value="8" />8<label for="mycheckbox8"></label>
            <input type="checkbox" id="mycheckbox9" name="uss-input[]" value="9" />9<label for="mycheckbox9"></label>
            <input type="checkbox" id="mycheckbox10" name="uss-input[]" value="10" />10<label for="mycheckbox10"></label>
            <input type="checkbox" id="mycheckbox11" name="uss-input[]" value="11" />11<label for="mycheckbox11"></label>
            <input type="checkbox" id="mycheckbox12" name="uss-input[]" value="12" />12<label for="mycheckbox12"></label>
            </div>
            <br><br>
            <input id="submit" type="submit">
        </form>
        <?php
          include ("loganprobs.php");                                    
        ?>
  </body>
</html>