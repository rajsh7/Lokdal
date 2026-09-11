<?php




    include_once("../db.php");

    

    $sql="SELECT * FROM leader_updates;";
    $result = $con ? mysqli_query($con,$sql) : false;

?>



<section id="section-4" class="text-center">
                <div class="container">
                    <h3 class="my-0 fs-1 fw-medium text-primary text-uppercase">Daily</h3>
                    <h2 class="mb-5 fw-medium text-secondary text-uppercase">Updates</h2>
                    
                    <div class="row justify-content-center">
                        

                        <?php

                         while($row=mysqli_fetch_assoc($result)){
											  
                         ?>
                        <div class="col-lg-6 mb-4 mb-lg-6" data-aos="fade-up" data-aos-duration="1000">
                            <a data-lightbox="banner" href="../../dashboard/<?= $row['img'];?>" class="mb-3 d-block position-relative">
                                <div class="position-absolute d-flex justify-content-center align-items-center w-100 h-100 bg-secondary rounded text-white">
                                </div>
                                <img src="../../dashboard/<?= $row['img'];?>" alt="" class="position-relative img-fluid w-100 shadow-lg rounded opacity-1-hover" />
                            </a>
                            
                        </div>


                        <?php
                         }
                         ?>
                    </div>
                </div>
            </section>