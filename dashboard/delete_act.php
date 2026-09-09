<?php 
    session_start();
    if(isset($_SESSION['user'])){

        if(isset($_GET['delete_id'])){
            $del=$_GET['delete_id'];
            include_once("db.php");
            $sql="DELETE FROM `activities` WHERE id='$del';";
            $result = mysqli_query($con,$sql);
            header("location:manage_act.php");
        }

    }
?>