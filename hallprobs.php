<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '19'");
    $query2 = mysql_query("SELECT value FROM ans WHERE id = '20'");
    $query3 = mysql_query("SELECT value FROM ans WHERE id = '21'");
    $query4 = mysql_query("SELECT value FROM ans WHERE id = '22'");
    $query5 = mysql_query("SELECT value FROM ans WHERE id = '23'");
    $query6 = mysql_query("SELECT value FROM ans WHERE id = '24'");
    $query7 = mysql_query("SELECT value FROM ans WHERE id = '25'");
    $query8 = mysql_query("SELECT value FROM ans WHERE id = '26'");
    $query9 = mysql_query("SELECT value FROM ans WHERE id = '27'");
    $query10 = mysql_query("SELECT value FROM ans WHERE id = '28'");
    
    $ans1 = mysql_fetch_array($query1);
    $ans2 = mysql_fetch_array($query2);
    $ans3 = mysql_fetch_array($query3);
    $ans4 = mysql_fetch_array($query4);
    $ans5 = mysql_fetch_array($query5);
    $ans6 = mysql_fetch_array($query6);
    $ans7 = mysql_fetch_array($query7);
    $ans8 = mysql_fetch_array($query8);
    $ans9 = mysql_fetch_array($query9);
    $ans10 = mysql_fetch_array($query10);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["hall-input-1"];
        $input2 = $_POST["hall-input-2"];
        $input3 = $_POST["hall-input-3"];
        $input4 = $_POST["hall-input-4"];
        $input5 = $_POST["hall-input-5"];
        $input6 = $_POST["hall-input-6"];
        $input7 = $_POST["hall-input-7"];
        $input8 = $_POST["hall-input-8"];
        $input9 = $_POST["hall-input-9"];
        $input10 = $_POST["hall-input-10"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("ha1", true);</script>';
        }
        if ($input2 == $ans2[0]) {
            echo '<script type="text/javascript">writeCookie("ha2", true);</script>';
        }
        
        if ($input3 == $ans3[0]) {
            echo '<script type="text/javascript">writeCookie("ha3", true);</script>';
        }
        
        if ($input4 == $ans4[0]) {
            echo '<script type="text/javascript">writeCookie("ha4", true);</script>';
        }
        
        if ($input5 == $ans5[0]) {
            echo '<script type="text/javascript">writeCookie("ha5", true);</script>';
        }
        
        if ($input6 == $ans6[0]) {
            echo '<script type="text/javascript">writeCookie("ha6", true);</script>';
        }
        
        if ($input7 == $ans7[0]) {
            echo '<script type="text/javascript">writeCookie("ha7", true);</script>';
        }
        
        if ($input8 == $ans8[0]) {
            echo '<script type="text/javascript">writeCookie("ha8", true);</script>';
        }
        
        if ($input9 == $ans9[0]) {
            echo '<script type="text/javascript">writeCookie("ha9", true);</script>';
        }
        
        if ($input10 == $ans10[0]) {
            echo '<script type="text/javascript">writeCookie("ha10", true);</script>';
        }
    }
?>