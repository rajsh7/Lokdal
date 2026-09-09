
<?php 
session_start();
if(isset($_SESSION['user'])){

   require_once("db.php");

   if(isset($_GET['new'])){

    $img1=$_FILES["img1"]["name"];
    $img_temp1=$_FILES["img1"]["tmp_name"];
    $folder1="img/activity/".$img1;
    move_uploaded_file($img_temp1,$folder1);

    $img2=$_FILES["img2"]["name"];
    $img_temp2=$_FILES["img2"]["tmp_name"];
    $folder2="img/activity/".$img2;
    move_uploaded_file($img_temp2,$folder2);

    $img3=$_FILES["img3"]["name"];
    $img_temp3=$_FILES["img3"]["tmp_name"];
    $folder3="img/activity/".$img3;
    move_uploaded_file($img_temp3,$folder3);

    $img4=$_FILES["img4"]["name"];
    $img_temp4=$_FILES["img4"]["tmp_name"];
    $folder4="img/activity/".$img4;
    move_uploaded_file($img_temp4,$folder4);

    $img5=$_FILES["img5"]["name"];
    $img_temp5=$_FILES["img5"]["tmp_name"];
    $folder5="img/activity/".$img5;
    move_uploaded_file($img_temp5,$folder5);

    $img6=$_FILES["img6"]["name"];
    $img_temp6=$_FILES["img6"]["tmp_name"];
    $folder6="img/activity/".$img6;
    move_uploaded_file($img_temp6,$folder6);


    $title = $_POST['title'];
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $t5 = $_POST['t5'];
    $t6 = $_POST['t6'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    $s6 = $_POST['s6'];

    $sql="INSERT INTO `activities`
            (`title`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`) 
    VALUES ('$title','$folder1','$folder2','$folder3','$folder4','$folder5','$folder6', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6')";

    


        if($con->query($sql)==true){
            echo "<script>alert('Published Successfully');</script>";
            header("location:manage_act.php");
        }
        else{
        echo "ERROR: $sql <br> $con->error";
   
        }


      }







        if(isset($_GET['update_id'])){

          $update_id=$_GET['update_id'];
            
            
           
            $img1=$_FILES["img1"]["name"];
            $img_temp1=$_FILES["img1"]["tmp_name"];
            $folder1="img/activity/".$img1;
            move_uploaded_file($img_temp1,$folder1);

            $img2=$_FILES["img2"]["name"];
            $img_temp2=$_FILES["img2"]["tmp_name"];
            $folder2="img/activity/".$img2;
            move_uploaded_file($img_temp2,$folder2);

            $img3=$_FILES["img3"]["name"];
            $img_temp3=$_FILES["img3"]["tmp_name"];
            $folder3="img/activity/".$img3;
            move_uploaded_file($img_temp3,$folder3);

            $img4=$_FILES["img4"]["name"];
            $img_temp4=$_FILES["img4"]["tmp_name"];
            $folder4="img/activity/".$img4;
            move_uploaded_file($img_temp4,$folder4);

            $img5=$_FILES["img5"]["name"];
            $img_temp5=$_FILES["img5"]["tmp_name"];
            $folder5="img/activity/".$img5;
            move_uploaded_file($img_temp5,$folder5);

            $img6=$_FILES["img6"]["name"];
            $img_temp6=$_FILES["img6"]["tmp_name"];
            $folder6="img/activity/".$img6;
            move_uploaded_file($img_temp6,$folder6);

            
            if($img1!=""){
              $sql="UPDATE activities 
                SET img1 =  '$folder1'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            if($img2!=""){
              $sql="UPDATE activities 
                SET img2 =  '$folder2'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            if($img3!=""){
              $sql="UPDATE activities 
                SET img3 =  '$folder3'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            if($img4!=""){
              $sql="UPDATE activities 
                SET img4 =  '$folder4'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            if($img5!=""){
              $sql="UPDATE activities 
                SET img5 =  '$folder5'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            if($img6!=""){
              $sql="UPDATE activities 
                SET img6 =  '$folder6'
                WHERE id = $update_id;";
                $con->query($sql);
            }

            

      
          $title = $_POST['title'];
          $t1 = $_POST['t1'];
          $t2 = $_POST['t2'];
          $t3 = $_POST['t3'];
          $t4 = $_POST['t4'];
          $t5 = $_POST['t5'];
          $t6 = $_POST['t6'];
          $s1 = $_POST['s1'];
          $s2 = $_POST['s2'];
          $s3 = $_POST['s3'];
          $s4 = $_POST['s4'];
          $s5 = $_POST['s5'];
          $s6 = $_POST['s6'];
      
         $sql="UPDATE activities 
                SET title =  '$title',
                    t1='$t1',
                    t2='$t2',
                    t3='$t3',
                    t4='$t4',
                    t5='$t5',
                    t6='$t6',
                    s1='$s1',
                    s2='$s2',
                    s3='$s3',
                    s4='$s4',
                    s5='$s5',
                    s6='$s6'
                WHERE id = $update_id;";
      
      
      
              if($con->query($sql)==true){
                  echo "<script>alert('Published Successfully');</script>";
                  header("location:manage_act.php");
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