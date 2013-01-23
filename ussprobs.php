<?php
    include ("login.php");
    $question_num = $_GET["num"];
    
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $query1 = mysql_query("SELECT value FROM ans WHERE id = '18'");
        $query2 = mysql_query("SELECT value FROM ans WHERE id = '60'");
        $query3 = mysql_query("SELECT value FROM ans WHERE id = '61'");
        
        $ans1 = mysql_fetch_array($query1);
        $ans2 = mysql_fetch_array($query2);
        $ans3 = mysql_fetch_array($query3);
        
        $ussinp = $_POST["uss-input"];
        if ((count($ussinp) == 3) && $ussinp[0] == $ans1[0] && $ussinp[1] == $ans2[0] && $ussinp[2] == $ans3[0]) {
            echo "correct";
            echo '<script type="text/javascript">writeCookie("usscorrect", true);</script>';
        }
    }
?>
