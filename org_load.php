<?php

    require_once "pdo.php";
    $output='';
    if(isset($_POST['city_id'])){
        if($_POST['page']=='therapy'){
        $sql = "SELECT * FROM therapy_master WHERE th_flag='Organisation' and location = '".$_POST['city_id']."';";
            $stmt = $pdo->query($sql);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class="col-12 col-lg-6">
                    <figure class="figure">
                        <img src="'.$row['th_image'].'"
                            class="figure-img img-fluid" style="max-height:400px;">
                        <figcaption class="figure-caption small">
                            <h5>'.$row['th_name'].'<br>
                        '.$row['th_email'].'<br>'.$row['th_mobile'].'<br></h5>
                            <p class="mb-0">'.$row['descp'].'</p><br>
                            <a href="'.$row['web_link'].'" class="btn btn-primary" target="_blank">KNOW MORE</a>
                        </figcaption>
                    </figure>
                </div>';
            
            }
            echo $output;
    }
    if($_POST['page']=='jobs'){
        $sql2 = "SELECT * FROM jobs_master WHERE j_flag='Website' and j_location = '".$_POST['city_id']."';";
        $stmt2 = $pdo->query($sql2);
        $stmt2->execute();
        while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class=" jumbotron row no-gutters bg-light p-4 mb-4">
          <div  class="col-12 mb-4 mb-lg-0">
        <div class="row">
          <div class="text-center" style="width:20%;">
            <img src="'.$row2['j_image'].'"
              class="img-company  mb-4 mb-lg-0">
          </div>
          <div style="width:80%;">
            <h2>'.$row2['j_comp'].'</h2>
            <p style="text-align: justify;">'.$row2['j_desc'].' </p>
            <a href="'.$row2['j_webs'].'" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
      </div>';
        }
            echo $output;
    }
    }

?>