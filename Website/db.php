<?php

$server = getenv('DB_HOST') ?: "localhost";
$username = getenv('DB_USER') ?: "root";
//$password="root";
//$db="seg_lokdal";
$password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : "";
$db = getenv('DB_NAME') ?: "lokdal";

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