<?php
    // Connect to server
    $con = mysql_connect("sql.mit.edu", "quanquan", "Mars6907!@");
    mysql_select_db("quanquan+sumit2013", $con);
    if (!$con) {
        die("Didn't connect to db successfully");
    }
?>