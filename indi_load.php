<?php

    require_once "pdo.php";
    $output='';
    if(isset($_POST['city_id'])){
        if($_POST['page']=='therapy'){
        $sql = "SELECT * FROM therapy_master WHERE th_flag='Individual' and location = '".$_POST['city_id']."';";
            $stmt = $pdo->query($sql);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class="row mb-4 flex-row-reverse align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <img src="https://images.pexels.com/photos/1311518/pexels-photo-1311518.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <h5>'.$row['th_name'].'<br>
                        '.$row['th_email'].'<br>'.$row['th_mobile'].'<br></h5>
                    <p>'.$row['descp'].'</p>
                    <a href="'.$row['web_link'].'" class="btn btn-primary" target="_blank">BOOK AN APPOINTMENT</a>
                </div>
            </div>
            <hr class="mb-4">';
            
            }
            echo $output;
    }
    if($_POST['page']=='jobs'){
        $sql2 = "SELECT * FROM jobs_master WHERE j_flag='Individual' and j_location = '".$_POST['city_id']."';";
        $stmt2 = $pdo->query($sql2);
        $stmt2->execute();
        while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
        <div class="card" style="height:400px;">
          <div class="card-header small">
            <h1 class="h4">'.$row2['j_comp'].'</h1>
            <div>
              <h6>'.$row2['j_pos'].'</h6>
            </div>
            <div class="small">Posted on: <time datetime="2021-01-09">'.$row2['j_date'].'</time></div>
          </div>
          <div class="card-body" style="height: 200px;overflow-y: auto;">
            <p>'.$row2['j_desc'].'</p>
          </div>
          <div class="card-footer">
            <a href="'.$row2['j_webs'].'" target = "_blank" class="btn btn-block btn-primary">Read more</a>
          </div>
        </div>
      </div>';
        }
            echo $output;
    }
    }

?>

