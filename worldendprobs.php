<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '1'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '2'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '3'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '4'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '5'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '6'");
    $query7 = mysql_query("SELECT value FROM ans WHERE id = '7'");
    
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
        $input1 = $_POST["end-input-1"];
        $input2 = $_POST["end-input-2"];
        $input3 = $_POST["end-input-3"];
        $input4 = $_POST["end-input-4"];
        $input5 = $_POST["end-input-5"];
        $input6 = $_POST["end-input-6"];
        $input7 = $_POST["end-input-7"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">makeMark("end-check-1"); writeCookie("fc1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("fc2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("fc3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("fc4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("fc5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("fc6", true);</script>';
        }
        
        if ($input7 == $ans7[0]) {
            echo '<script type="text/javascript">writeCookie("fc7", true);</script>';
        }
    }
?>