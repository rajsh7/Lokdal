<?php

$server="localhost";
$username="root";
//$password="root";
//$db="seg_lokdal";
$password="";
$db="lokdal";

$con = @mysqli_connect($server, $username, $password, $db);

if(!$con){
    $con = false;
}

?>