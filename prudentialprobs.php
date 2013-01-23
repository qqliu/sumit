<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '33'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '34'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '35'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '36'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '37'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '38'");
    $query7 = mysql_query("SELECT value FROM ans WHERE id = '39'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    $ans5 = mysql_fetch_array($query5);
    $ans6 = mysql_fetch_array($query6);
    $ans7 = mysql_fetch_array($query7);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["prudential-input-1"];
        $input2 = $_POST["prudential-input-2"];
        $input3 = $_POST["prudential-input-3"];
        $input4 = $_POST["prudential-input-4"];
        $input5 = $_POST["prudential-input-5"];
        $input6 = $_POST["prudential-input-6"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("pr1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("pr2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("pr3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("pr4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("pr5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("pr6", true);</script>';
        }
        
        if ($input7 == $ans7[0]) {
            echo '<script type="text/javascript">writeCookie("pr7", true);</script>';
        }
    }
?>