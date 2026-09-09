<?php
session_start();  
    $server="localhost";
    $username="root";
    // $password="root";
    // $db="seg_lokdal";
    $password="1222@9Xt5Qglc*2kcH";
    $db="lokdal";

    $con=mysqli_connect($server, $username, $password, $db);

    if(!$con){
        die("Connection fail");
    }


if(isset($_POST['login'])){
    $name=$_POST['user'];
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:index.php?Empty=Please Enter Username or Password");
    }
    else{
        $query="select * from users where user='".$_POST['user']."' and pass='".$_POST['pass']."'";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']=$_POST['user'];
            header("location:../dashboard");
        }
        else{
            header("location:index.php?Invalid=Incorrect Username or Password");
        }
    }
}
?>