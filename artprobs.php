<?php
    include ("login.php");
    
    $question_num = $_GET["num"];
    $query1 = mysql_query("SELECT value FROM ans WHERE id = '16'");
    
    $ans1 = mysql_fetch_array($query1);
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $input1 = $_POST["art-input-1"];
        
        if ($input1 == $ans1[0]) {
            echo '<script type="text/javascript">writeCookie("ar1", true);</script>';
        }
    }
?>