<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '10'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '11'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '12'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '13'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '14'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '15'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    $ans5 = mysql_fetch_array($query5);
    $ans6 = mysql_fetch_array($query6);

    $input1 = $_POST["moon-input-1"];
    $input2 = $_POST["moon-input-2"];
    $input3 = $_POST["moon-input-3"];
    $input4 = $_POST["moon-input-4"];
    $input5 = $_POST["moon-input-5"];
    $input6 = $_POST["moon-input-6"];
    
    if ($input1 == $ans1[0]) {
        echo '<script type="text/javascript">writeCookie("mi1", true);</script>';
    }
    if ($input2 == $ans2[0]) {
        echo '<script type="text/javascript">writeCookie("mi2", true);</script>';
    }
    
    if ($input3 == $ans3[0]) {
        echo '<script type="text/javascript">writeCookie("mi3", true);</script>';
    }
    
    if ($input4 == $ans4[0]) {
        echo '<script type="text/javascript">writeCookie("mi4", true);</script>';
    }
    
    if ($input5 == $ans5[0]) {
        echo '<script type="text/javascript">writeCookie("mi5", true);</script>';
    }
    
    if ($input6 == $ans6[0]) {
        echo '<script type="text/javascript">writeCookie("mi6", true);</script>';
    }
?>