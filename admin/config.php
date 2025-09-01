<?php
date_default_timezone_set('Asia/Kolkata');
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ecommerce";  

$db = new mysqli ($server, $username, $password, $database);

if ($db-> connect_errno > 0 ){
    echo "connection failed" . $db-> connect_errno;
}
?>
