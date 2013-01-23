<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '54'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '55'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '56'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '57'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '58'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '59'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    $ans5 = mysql_fetch_array($query5);
    $ans6 = mysql_fetch_array($query6);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["aquarium-input-1"];
        $input2 = $_POST["aquarium-input-2"];
        $input3 = $_POST["aquarium-input-3"];
        $input4 = $_POST["aquarium-input-4"];
        $input5 = $_POST["aquarium-input-5"];
        $input6 = $_POST["aquarium-input-6"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("aq1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("aq2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("aq3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("aq4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("aq5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("aq6", true);</script>';
        }
    }
?>