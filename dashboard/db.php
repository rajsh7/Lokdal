<?php

$server = getenv('DB_HOST') ?: "localhost";
$username = getenv('DB_USER') ?: "root";
//$password="root";
//$db="seg_lokdal";
$password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : "";
$db = getenv('DB_NAME') ?: "lokdal";

$con = @mysqli_connect($server, $username, $password, $db);

if(!$con){
    $con = false;
}

?>