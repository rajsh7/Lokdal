<?php

include_once("db.php");

if(isset($_GET["update_id"])){
    $update_id=$_GET["update_id"];
    $name=$_POST["name"];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $p1=$_POST['p1'];

        
            $sql="UPDATE users SET user='$name', email='$email',contact='$contact' WHERE id=$update_id;";
            $con->query($sql);

            echo "<script>alert('Uploading Image');</script>";
            $img=$_FILES["img"]["name"];
            $img_temp=$_FILES["img"]["tmp_name"];
            $folder="img/users/".$img;
            move_uploaded_file($img_temp,$folder);

        if($img!=""){
            $sql="UPDATE users SET dp='$folder' WHERE id=$update_id;";
            $con->query($sql);
        }

        if($p1!=""){
            $sql="UPDATE users SET pass='$p1' WHERE id=$update_id;";
        }
    
        
        if($con->query($sql)==true){
            echo "<script>alert('Updated Successfully');</script>";
            header("location:manage_user.php");
        }
        else{
        echo "ERROR: $sql <br> $con->error";
   
        }
    
    
    
}


?>