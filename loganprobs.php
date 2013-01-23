<?php
    include ("login.php");
    
    echo $question_num[0];
    if (count($question_num) == 0) {
        echo "Not doing answer checking";
    }
    else {
        $weigh1left = $_POST["weigh1l"];
        $weigh1right = $_POST["weigh1r"];
        $weigh2left = $_POST["weigh2l"];
        $weigh2right = $_POST["weigh2r"];
        $weigh3left = $_POST["weigh3l"];
        $weigh3right = $_POST["weigh3r"];
        
        $result = FALSE;
        
        $b = array($weigh1left, $weigh1right, $weigh2left, $weigh2right, $weigh3left, $weigh3right);
        
        if (count($weigh1left)==count($weigh1right) && count($weigh2left)==count($weigh2right) && count($weigh2right) && count($weigh3left)==count($weigh3right)) {
            $w = array(0,0,0,0,0,0,0,0,0,1);
            $c = 0;
            while ($c < 1022) {
                $flag = FALSE;
                $k = 0;
                while (($flag == FALSE) && ($k < 3)) {
                    $L = 0;
                    $R = 0;
                    $p = 0;
                    while ($p < 10) {
                        if (in_array($p, $b[$k][0])) {
                            $L = $w[$p] + $L;
                        }
                        if (in_array($p, $b[$k][0])) {
                            $R = $w[$p] + $R;
                        }
                        $p = $p + 1;
                    }
                    if ($L != $R) {
                        $flag = TRUE;
                    }
                    $k = $k + 1;
                }
                if (!$flag) {
                    $result = FALSE;
                }
                $p = 9;
                $carry = TRUE;
                while (($p >= 0) && $carry) {
                    if ($w[$p] == 0) {
                        $w[$p] = 1;
                        $carry = FALSE;
                    }
                    else {
                        $w[$p] = 0;
                    }
                    $p = $p - 1;
                }
                $c = $c + 1;
            }
            $result = TRUE;
        }
        if ($result) {
            echo '<script type="text/javascript">writeCookie("logancorrect", true);</script>';
        }
    }
?>