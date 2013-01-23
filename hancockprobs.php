<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '40'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '41'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '42'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '43'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '44'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '45'");
    $query7 = mysql_query("SELECT value FROM ans WHERE id = '46'");
    $query8 = mysql_query("SELECT value FROM ans WHERE id = '47'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    $ans5 = mysql_fetch_array($query5);
    $ans6 = mysql_fetch_array($query6);
    $ans7 = mysql_fetch_array($query7);
    $ans8 = mysql_fetch_array($query8);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["hancock-input-1"];
        $input2 = $_POST["hancock-input-2"];
        $input3 = $_POST["hancock-input-3"];
        $input4 = $_POST["hancock-input-4"];
        $input5 = $_POST["hancock-input-5"];
        $input6 = $_POST["hancock-input-6"];
        $input7 = $_POST["hancock-input-7"];
        $input8 = $_POST["hancock-input-8"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("co1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("co2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("co3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("co4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("co5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("co6", true);</script>';
        }
        
        if ($input7 == $ans7[0]) {
            echo '<script type="text/javascript">writeCookie("co7", true);</script>';
        }
        
        if ($input8 == $ans8[0]) {
            echo '<script type="text/javascript">writeCookie("co8", true);</script>';
        }
    }
?>