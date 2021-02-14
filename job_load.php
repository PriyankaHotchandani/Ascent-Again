<?php

 require_once "pdo.php";
    $output='';
    if(isset($_POST['city_id'])){
        $sql2 = "SELECT * FROM jobs_master WHERE j_flag='Website' and j_location = '".$city."';";
        $stmt2 = $pdo->query($sql2);
        $stmt2->execute();
        while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class=" jumbotron row no-gutters alert p-4 mb-4">
          <div  class="col-12 mb-4 mb-lg-0">
        <div class="row">
          <div class="text-center" style="width:20%;">
            <img src="https://www.syntax.com/wp-content/uploads/2018/05/naukri-logo-square.png"
              class="img-company  mb-4 mb-lg-0">
          </div>
          <div style="width:80%;">
            <h2>'.$row2['j_comp'].'</h2>
            <p style="text-align: justify;">'.$row2['j_desc'].' </p>
            <a href="'.$row['j_webs'].'" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
      </div>';
        }
            echo $output;
    }

?>