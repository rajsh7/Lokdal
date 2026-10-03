<?php

$server="localhost";
$username="root";
//$password="root";
//$db="seg_lokdal";
$password="";
$db="lokdal";

try {
    if (function_exists('mysqli_report')) {
        @mysqli_report(MYSQLI_REPORT_OFF);
    }
    $con = @mysqli_connect($server, $username, $password, $db);
} catch (Throwable $e) {
    $con = false;
}

if(!$con){
    $con = false;
}

?>