<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '29'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '30'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '31'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '32'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["garden-input-1"];
        $input2 = $_POST["garden-input-2"];
        $input3 = $_POST["garden-input-3"];
        $input4 = $_POST["garden-input-4"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("ga1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("ga2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("ga3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("ga4", true);</script>';
        }
    }
?>