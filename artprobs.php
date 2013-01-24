<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '16'");
    
    $ans1 = mysql_fetch_array($query1);
    
    $input1 = $_POST["art-input-1"];
    
    if ($input1 == $ans1[0]) {
        echo '<script type="text/javascript">writeCookie("ar1", true);</script>';
    }
?>