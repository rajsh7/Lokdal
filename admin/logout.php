<?php
session_start();
// Check if the logout button is clicked or not
if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
}
else{
    header("location:index.php");
}
?>