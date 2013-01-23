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
    <div id="world-end-problems">
        <p>Instructions: Among all positive numbers whose decimal digits consist only of 0's and 1's, find the smallest that is divisible by the indicated numbers.</p>
        <div class = "imagewrapper">
          <img id = "end-check-1" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-1" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-2" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-2" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-3" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-3" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-4" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-4" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-5" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-5" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-6" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-6" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
          <img id = "end-check-7" class="checkmark" border="0" src="images/checkmark.png" alt="Check Mark">
          <img id = "end-cross-7" class="xmark" border="0" src="images/crossmark.png" alt="X Mark">
        </div>
        <ol>
            <li>5 and 9</li>
            <form action="worldend.php?num[]=worldendcheck" method="post">
                Answer: <input type="text" value="" name="end-input-1">
            <li>3 and 11</li>
                Answer: <input type="text" value="" name="end-input-2">
            <li>3, 4, 5, and 11</li>
                Answer: <input type="text" value="" name="end-input-3">
        </ol>
        <p>Among all positive numbers whose decimal digits consist only of 0's, 1's and 2's, find the smallest that is divisible by the indicated numbers.</p>
        <ol start="4">
            <li>5 and 9</li>
                Answer: <input type="text" value="" name="end-input-4">
            <li>3 and 11</li>
                Answer: <input type="text" value="" name="end-input-5">
            <li>3, 4, 5, and 11</li>
                Answer: <input type="text" value="" name="end-input-6">
            <li>Among all 9 digit numbers that use each digit from 1 to 9 exactly once, which is the smallest that is divisible by 5, 9, and 11?</li>
                Answer: <input type="text" value="" name="end-input-7">
                <br>
              <input id="world-end-submit" type="submit">
            </form>
        </ol>
        <button id="world-end-submit" onClick=checkAnswerWorldEnd();>Submit</button>
        <?php
          include ("worldendprobs.php");                                    
        ?>
  </body>
</html>