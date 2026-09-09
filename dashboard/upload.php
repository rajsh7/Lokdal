
<?php 
session_start();
if(isset($_SESSION['user'])){

   require_once("db.php");


  if(isset($_GET['update_id'])){
    $id=$_GET['update_id'];

    $title = $_POST['title'];
    $description = $_POST['description'];

    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
    
      $img=$_FILES["img"]["name"];
      $img_temp=$_FILES["img"]["tmp_name"];
      $folder1="img/update/".$img;
      move_uploaded_file($img_temp,$folder1);
      $sqlimg="UPDATE daily_update SET img='$folder1' WHERE id=$id;";
      
      if ($con->query($sqlimg)!=true){
       
        echo "ERROR: $sqlimg <br> $con->error";
    }
    }


    $sql="UPDATE daily_update
           SET title='$title',
           description='$description'
           WHERE id=$id;";

    if($con->query($sql)!=true){
                    
      echo "ERROR: $sql <br> $con->error";
      
      }

      header("location:manage_updates.php");
 
 



}








  if(isset($_GET['new'])){

    $img=$_FILES["img"]["name"];
    $img_temp=$_FILES["img"]["tmp_name"];
    $folder1="img/update/".$img;
    move_uploaded_file($img_temp,$folder1);

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql="INSERT INTO `daily_update` (`id`, `title`, `description`, `img`, `date`) VALUES (NULL, '$title', '$description', '$folder1', current_timestamp())";

    


        if($con->query($sql)==true){
            echo "<script>alert('Published Successfully');</script>";
            header("location:manage_updates.php");
        }
        else{
        echo "ERROR: $sql <br> $con->error";
   
  }




    
        }
?>











<?php
 }
else{
  header("location:../admin");
}

?>