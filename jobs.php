<?php

    require_once "pdo.php";
    if(isset($_SESSION['city']))
    {
        $city = $_SESSION['city'];
    }
    else{
        $city = "Mumbai";
    }
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css_jobs/bootstrap.min.css">
  <link rel="stylesheet" href="css_jobs/font-awesome.min.css">
  <link rel="stylesheet" href="css_jobs/jobs_styles.css">
  <link rel="stylesheet" href="css_jobs/footer.css">
  <link rel="stylesheet" href="css_jobs/navbar.css">


  <title>Jobs</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <div class="container">
      <li class="navbar-brand" style="font-size: large;">THERAPY</li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item active">
              <a href="jobs.php" class="nav-link">Jobs</a>
          </li>
          <li class="nav-item ">
            <a href="therapy.php" class="nav-link">Therapy</a>
          </li>
          <li class="nav-item">
            <a href="forum_first.php" class="nav-link">Connect</a>
          </li>
          <li class="nav-item">
            <a href="tidings.php" class="nav-link">Tidings</a>
          </li>
        </ul>
        <form method="POST">
                <div class="form-group">
                    <select class="form-control" id="sel1" name="city">
                        <option>Mumbai</option>
                        <option>Delhi</option>
                        <option>Bangalore</option>
                        <option>Kolkata</option>
                    </select>
                </div>
                </form>
      </div>
    </div>
  </nav>
  <div class="jumbotron" id="jam">

    <div class="row align-items-center">
      <div class="col-12 col-lg-4" id="jumb">
        <p class="lead">Giving wings to fly.<br> Giving strength to dreams. </p>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="alert alert-warning mb-4" role="alert">
      <h2 class="alert-heading">We're hiring!</h2>
      <p>Finding a job has never been this easy. Connect with various companies mentioned below and find your dream job.
        Or you could log on to one of the supporting websites to find more jobs related to your profile.</p>
    </div>
    <div class="row mb-4" id="indi">
        <?php 
        $sql = "SELECT * FROM jobs_master WHERE j_flag='Individual' and j_location = '".$city."';";
        $stmt = $pdo->query($sql);
        $stmt->execute();
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      echo'<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
        <div class="card" style="height:400px;">
          <div class="card-header small">
            <h1 class="h4">'.$row['j_comp'].'</h1>
            <div>
              <h6>'.$row['j_pos'].'</h6>
            </div>
            <div class="small">Posted on: <time datetime="2021-01-09">'.$row['j_date'].'</time></div>
          </div>
          <div class="card-body" style="height: 200px;overflow-y: auto;">
            <p>'.$row['j_desc'].'</p>
          </div>
          <div class="card-footer">
            <a href="'.$row['j_webs'].'" target = "_blank" class="btn btn-block btn-primary">Read more</a>
          </div>
        </div>
      </div>';
        }
        ?>
    </div>
    <div id="webs">
        <?php  
        $sql2 = "SELECT * FROM jobs_master WHERE j_flag='Website' and j_location = '".$city."';";
        $stmt2 = $pdo->query($sql2);
        $stmt2->execute();
        while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
      echo'<div class=" jumbotron row no-gutters alert p-4 mb-4">
          <div  class="col-12 mb-4 mb-lg-0">
        <div class="row">
          <div class="text-center" style="width:20%;">
            <img src="'.$row2['j_image'].'"
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
        }?>
    </div>
  
  </div>

  <footer class="small bg-light ftr">
    <div class="container py-3 py-sm-5 text-center">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <h6>Quick links</h6>
          <ul class="list-unstyled">
              <li><a href="index.php">Home</a></li>
              <li><a href="jobs.php">Jobs</a></li>
            <li><a href="#">Tidings</a></li>
            <li><a href="therapy.php">Therapy</a></li>
            <li><a href="forum_first.php">Connect</a></li>
          </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <h6>Follow us</h6>
          <ul class="list-unstyled">
            <li><a href="#0"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a></li>
            <li><a href="#0"><i class="fa fa-fw fa-instagram" aria-hidden="true"></i> Instagram</a></li>
            <li><a href="#0"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i> Twitter</a></li>
            <li><a href="#0"><i class="fa fa-fw fa-youtube" aria-hidden="true"></i> YouTube</a></li>
            <li><a href="#0"><i class="fa fa-fw fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <h6>Contact Us:</h6>
          <address>
            <strong>Company Name</strong><br>

            <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">(123) 456-7890</a><br>
            <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a
              href="mailto:info@domain.com">info@domain.com</a>
          </address>
        </div>
      </div>
      <ul class="list-inline mt-2 mb-0 text-center">
        <li class="list-inline-item">&copy; 2017 Company Name</li>
        <li class="list-inline-item">All rights reserved.</li>
      </ul>
    </div>
  </footer>

  <!-- jQuery first, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#sel1').change(function(){
            var city_id = $(this).val();
            $.ajax({
                url:"org_load.php",
                method: "POST",
                data:{city_id:city_id, page:"jobs"},
                success: function(data){
                    $('#webs').html(data);
                }
            })
            $.ajax({
                url:"indi_load.php",
                method: "POST",
                data:{city_id:city_id, page:"jobs"},
                success: function(data){
                    $('#indi').html(data);
                }
            })
        });
    });
    </script>
</body>

</html>
