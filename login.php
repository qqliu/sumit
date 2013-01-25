<?php
    // Connect to server
    $con = mysql_connect("XXXXXXXXXX", "XXXXXXXXXXXXX", "XXXXXXXXXXXX");
    mysql_select_db("quanquan+sumit2013", $con);
    if (!$con) {
        die("Didn't connect to db successfully");
    }
?>