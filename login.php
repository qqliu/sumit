<?php
    // Connect to server
    $con = mysql_connect("XXXXXXXXXX", "XXXXXXXXXX", "XXXXXXXXXX");
    mysql_select_db("XXXXXXXXXXXX", $con);
    if (!$con) {
        die("Didn't connect to db successfully");
    }
?>
