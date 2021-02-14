<?php
require_once "pdo.php";
    $output='';
    if(isset($_POST['city_id'])){
        $sql = "SELECT * FROM therapy_clients WHERE cl_city = '".$_POST['city_id']."';";
            $stmt = $pdo->query($sql);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $output .='<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="card" style="height:400px;overflow-y:auto;">
                    <div class="card-header small">Published: <time datetime="2021-01-30">'.$row['cl_date'].'</time></div>
                    <div class="card-body">
                        <h4 class="card-title">'.$row['cl_name'].'</h4>
                        <p class="card-text">'.$row['cl_exper'].'</p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>';
            
            }
            echo $output;
    }
?>