<!DOCTYPE HTML>

<html>
  <head>
    <title>Logan Airport</title>
    <link type="text/css" rel="stylesheet" href="styles/input-page.css" />
    <link type="text/css" rel="stylesheet" href="styles/sumitcp.css"/>
    <link type="text/css" rel="stylesheet" href="styles/logan.css"/>
    <script src="scripts/functions.js"></script>
    <script src="scripts/logan.js"></script>
  </head>
  
  <body onload="onLoad();">
    <div id = "top-panel-wrapper">
      <h1 class="center-title">Logan Airport</h1>
    </div>
    <div id="logan-problems">
        <form action="logan.php?num[]=logancheck" method="post">
        <table>
            <tr>
                <td>Weigh 1</td>
                <td>
                    <div id="w1l"><input type="checkbox" name="weigh1l[]" value="1" onclick="toggleChecks('w1');"/>1 <br></div>
                    <div id="w2l"><input type="checkbox" name="weigh1l[]" value="2" onclick="toggleChecks('w2');"/>2 <br></div>
                    <div id="w3l"><input type="checkbox" name="weigh1l[]" value="3" onclick="toggleChecks('w3');"/>3 <br></div>
                    <div id="w4l"><input type="checkbox" name="weigh1l[]" value="4" onclick="toggleChecks('w4');"/>4 <br></div>
                    <div id="w5l"><input type="checkbox" name="weigh1l[]" value="5" onclick="toggleChecks('w5');"/>5 <br></div>
                    <div id="w6l"><input type="checkbox" name="weigh1l[]" value="6" onclick="toggleChecks('w6');"/>6 <br></div>
                    <div id="w7l"><input type="checkbox" name="weigh1l[]" value="7" onclick="toggleChecks('w7');"/>7 <br></div>
                    <div id="w8l"><input type="checkbox" name="weigh1l[]" value="8" onclick="toggleChecks('w8');"/>8 <br></div>
                    <div id="w9l"><input type="checkbox" name="weigh1l[]" value="9" onclick="toggleChecks('w9');"/>9 <br></div>
                    <div id="w10l"><input type="checkbox" name="weigh1l[]" value="10" onclick="toggleChecks('w10');"/>10 <br></div>
                </td>
                <td>
                    <div id="w1"><input type="checkbox" name="weigh1r[]" value="1" onclick="toggleChecks('w1l');"/>1</div>
                    <div id="w2"><input type="checkbox" name="weigh1r[]" value="2" onclick="toggleChecks('w2l');"/>2</div>
                    <div id="w3"><input type="checkbox" name="weigh1r[]" value="3" onclick="toggleChecks('w3l');"/>3</div>
                    <div id="w4"><input type="checkbox" name="weigh1r[]" value="4" onclick="toggleChecks('w4l');"/>4</div>
                    <div id="w5"><input type="checkbox" name="weigh1r[]" value="5" onclick="toggleChecks('w5l');"/>5</div>
                    <div id="w6"><input type="checkbox" name="weigh1r[]" value="6" onclick="toggleChecks('w6l');"/>6</div>
                    <div id="w7"><input type="checkbox" name="weigh1r[]" value="7" onclick="toggleChecks('w7l');"/>7</div>
                    <div id="w8"><input type="checkbox" name="weigh1r[]" value="8" onclick="toggleChecks('w8l');"/>8</div>
                    <div id="w9"><input type="checkbox" name="weigh1r[]" value="9" onclick="toggleChecks('w9l');"/>9</div>
                    <div id="w10"><input type="checkbox" name="weigh1r[]" value="10" onclick="toggleChecks('w10l');"/>10</div>
                </td>
            </tr>
            <tr>
                <td>Weigh 2</td>
                <td>
                    <div id="w12l"><input type="checkbox" name="weigh2l[]" value="1" onclick="toggleChecks('w12');"/>1 <br></div>
                    <div id="w22l"><input type="checkbox" name="weigh2l[]" value="2" onclick="toggleChecks('w22');"/>2 <br></div>
                    <div id="w32l"><input type="checkbox" name="weigh2l[]" value="3" onclick="toggleChecks('w32');"/>3 <br></div>
                    <div id="w42l"><input type="checkbox" name="weigh2l[]" value="4" onclick="toggleChecks('w42');"/>4 <br></div>
                    <div id="w52l"><input type="checkbox" name="weigh2l[]" value="5" onclick="toggleChecks('w52');"/>5 <br></div>
                    <div id="w62l"><input type="checkbox" name="weigh2l[]" value="6" onclick="toggleChecks('w62');"/>6 <br></div>
                    <div id="w72l"><input type="checkbox" name="weigh2l[]" value="7" onclick="toggleChecks('w72');"/>7 <br></div>
                    <div id="w82l"><input type="checkbox" name="weigh2l[]" value="8" onclick="toggleChecks('w82');"/>8 <br></div>
                    <div id="w92l"><input type="checkbox" name="weigh2l[]" value="9" onclick="toggleChecks('w92');"/>9 <br></div>
                    <div id="w102l"><input type="checkbox" name="weigh2l[]" value="10" onclick="toggleChecks('w102');"/>10 <br></div>
                </td>
                <td>
                    <div id="w12"><input type="checkbox" name="weigh2r[]" value="1" onclick="toggleChecks('w12l');"/>1</div>
                    <div id="w22"><input type="checkbox" name="weigh2r[]" value="2" onclick="toggleChecks('w22l');"/>2</div>
                    <div id="w32"><input type="checkbox" name="weigh2r[]" value="3" onclick="toggleChecks('w32l');"/>3</div>
                    <div id="w42"><input type="checkbox" name="weigh2r[]" value="4" onclick="toggleChecks('w42l');"/>4</div>
                    <div id="w52"><input type="checkbox" name="weigh2r[]" value="5" onclick="toggleChecks('w52l');"/>5</div>
                    <div id="w62"><input type="checkbox" name="weigh2r[]" value="6" onclick="toggleChecks('w62l');"/>6</div>
                    <div id="w72"><input type="checkbox" name="weigh2r[]" value="7" onclick="toggleChecks('w72l');"/>7</div>
                    <div id="w82"><input type="checkbox" name="weigh2r[]" value="8" onclick="toggleChecks('w82l');"/>8</div>
                    <div id="w92"><input type="checkbox" name="weigh2r[]" value="9" onclick="toggleChecks('w92l');"/>9</div>
                    <div id="w102"><input type="checkbox" name="weigh2r[]" value="10" onclick="toggleChecks('w102l');"/>10</div>
                </td>
            </tr>
            <tr>
                <td>Weigh 3</td>
                <td>
                    <div id="w123l"><input type="checkbox" name="weigh3l[]" value="1" onclick="toggleChecks('w123');"/>1 <br></div>
                    <div id="w223l"><input type="checkbox" name="weigh3l[]" value="2" onclick="toggleChecks('w223');"/>2 <br></div>
                    <div id="w323l"><input type="checkbox" name="weigh3l[]" value="3" onclick="toggleChecks('w323');"/>3 <br></div>
                    <div id="w423l"><input type="checkbox" name="weigh3l[]" value="4" onclick="toggleChecks('w423');"/>4 <br></div>
                    <div id="w523l"><input type="checkbox" name="weigh3l[]" value="5" onclick="toggleChecks('w523');"/>5 <br></div>
                    <div id="w623l"><input type="checkbox" name="weigh3l[]" value="6" onclick="toggleChecks('w623');"/>6 <br></div>
                    <div id="w723l"><input type="checkbox" name="weigh3l[]" value="7" onclick="toggleChecks('w723');"/>7 <br></div>
                    <div id="w823l"><input type="checkbox" name="weigh3l[]" value="8" onclick="toggleChecks('w823');"/>8 <br></div>
                    <div id="w923l"><input type="checkbox" name="weigh3l[]" value="9" onclick="toggleChecks('w923');"/>9 <br></div>
                    <div id="w1023l"><input type="checkbox" name="weigh3l[]" value="10" onclick="toggleChecks('w1023');"/>10 <br></div>
                </td>
                <td>
                    <div id="w123"><input type="checkbox" name="weigh3r[]" value="1" onclick="toggleChecks('w123l');"/>1</div>
                    <div id="w223"><input type="checkbox" name="weigh3r[]" value="2" onclick="toggleChecks('w223l');"/>2</div>
                    <div id="w323"><input type="checkbox" name="weigh3r[]" value="3" onclick="toggleChecks('w323l');"/>3</div>
                    <div id="w423"><input type="checkbox" name="weigh3r[]" value="4" onclick="toggleChecks('w423l');"/>4</div>
                    <div id="w523"><input type="checkbox" name="weigh3r[]" value="5" onclick="toggleChecks('w523l');"/>5</div>
                    <div id="w623"><input type="checkbox" name="weigh3r[]" value="6" onclick="toggleChecks('w623l');"/>6</div>
                    <div id="w723"><input type="checkbox" name="weigh3r[]" value="7" onclick="toggleChecks('w723l');"/>7</div>
                    <div id="w823"><input type="checkbox" name="weigh3r[]" value="8" onclick="toggleChecks('w823l');"/>8</div>
                    <div id="w923"><input type="checkbox" name="weigh3r[]" value="9" onclick="toggleChecks('w923l');"/>9</div>
                    <div id="w1023"><input type="checkbox" name="weigh3r[]" value="10" onclick="toggleChecks('w1023l');"/>10</div>
                </td>
            </tr>
        </table>
        <input id="island-submit" type="submit">
        </form> 
        <?php
          include ("loganprobs.php");                                    
        ?>
  </body>
</html>