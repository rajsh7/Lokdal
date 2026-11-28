<?php
session_start();  
    $server = getenv('DB_HOST') ?: "localhost";
    $username = getenv('DB_USER') ?: "root";
    // $password="root";
    // $db="seg_lokdal";
    $password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : "1222@9Xt5Qglc*2kcH";
    $db = getenv('DB_NAME') ?: "lokdal";

    $con=@mysqli_connect($server, $username, $password, $db);

    if(!$con){
        die("Connection fail");
    }

// Check if the login button is clicked or not
if(isset($_POST['login'])){
    $name=$_POST['user'];
    // Check if the username or password is empty
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:index.php?Empty=Please Enter Username or Password");
    }
    // Check if the username and password are correct
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