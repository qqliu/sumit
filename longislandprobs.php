<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '48'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '49'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '50'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '51'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '52'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '53'");
    
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
        $input1 = $_POST["island-input-1"];
        $input2 = $_POST["island-input-2"];
        $input3 = $_POST["island-input-3"];
        $input4 = $_POST["island-input-4"];
        $input5 = $_POST["island-input-5"];
        $input6 = $_POST["island-input-6"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("li1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("li2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("li3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("li4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("li5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("li6", true);</script>';
        }
    }
?>