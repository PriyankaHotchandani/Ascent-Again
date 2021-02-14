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

    <link rel="stylesheet" href="css_ther/bootstrap.min.css">
    <link rel="stylesheet" href="css_ther/font-awesome.min.css">
    <link rel="stylesheet" href="css_ther/therapy.css">
    <link rel="stylesheet" href="css_ther/navbar.css">
    <link rel="stylesheet" href="css_ther/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora&display=swap" rel="stylesheet">

    <title>Therapy</title>
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
                    <li class="nav-item">
                        <a href="jobs.php" class="nav-link">Jobs</a>
                    </li>
                    <li class="nav-item active">
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
    <div class="container my-3 my-sm-5">
        <div class="mb-sm-4">
            <h2 class="text-center mb-sm-4">HOW THERAPY HELPS...</h2>
            <p>Starting therapy can be a daunting task, especially if you don’t feel ready. When life goes wrong,
                it’s
                hard to imagine piling on another stressful task. On the other hand, when life goes well, it’s easy
                to
                put therapy off. If you’re already barely hanging on by a thread, it’s hard to believe you can cope
                with
                more pain. However, a licensed therapist is trained to help you safely manage this pain and these
                tough
                emotions. Even if you’re not ready to get into big matters, a therapist can offer strategies and
                support for your immediate needs. You can always address deep-seated issues later, when you’re more
                comfortable doing so. Many times, people feel better just getting a few things off their chest in a
                safe
                space. Starting therapy, even if you go very slowly, gives you a life-line in times of greater need.
            </p>

            <div class="container my-3 my-sm-5">
                <div class="row" id="bullets">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/3755761/pexels-photo-3755761.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>Stress and Anxiety</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/3209117/pexels-photo-3209117.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>Depression</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/226166/pexels-photo-226166.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>Relationships and Family Conflict</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/4058945/pexels-photo-4058945.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>Abuse</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/568021/pexels-photo-568021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>Loss and Trauma</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                        <img src="https://images.pexels.com/photos/3738057/pexels-photo-3738057.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="img-fluid rounded-circle mb-2">
                        <p>LGBTQIA+ Assist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec">
        <div class="container my-3 my-sm-5">
            <h2 class="text-center mb-sm-4">THERAPISTS</h2>
            <div id="indi">
            <?php 
            $sql2 = "SELECT * FROM therapy_master WHERE th_flag='Individual' and location = '".$city."';";
            $stmt2 = $pdo->query($sql2);
            $stmt2->execute();
            while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) {
            echo'<div class="row mb-4 flex-row-reverse align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <img src="https://images.pexels.com/photos/1311518/pexels-photo-1311518.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <h5>'.$row2['th_name'].'<br>
                        '.$row2['th_email'].'<br>'.$row2['th_mobile'].'<br></h5>
                    <p>'.$row2['descp'].'</p>
                    <a href="'.$row2['web_link'].'" class="btn btn-primary" target="_blank">BOOK AN APPOINTMENT</a>
                </div>
            </div>
            <hr class="mb-4">';}?>  
            </div>
            </div>
    </div>

    <div id="org">
        <div class="mb-sm-4">
            <h2 class="text-center mb-sm-4">ORGANISATIONS</h2>
            <div class="row"  id="orgi">
                <?php  
                $sql3 = "SELECT * FROM therapy_master WHERE th_flag='Organisation' and location = '".$city."';";
                $stmt3 = $pdo->query($sql3);
                $stmt3->execute();
                while ( $row3 = $stmt3->fetch(PDO::FETCH_ASSOC) ) {
                echo'<div class="col-12 col-lg-6">
                    <figure class="figure">
                        <img src="'.$row3['th_image'].'"
                            class="figure-img img-fluid" style="height: 300px;">
                        <figcaption class="figure-caption small">
                            <h5>'.$row3['th_name'].'<br>
                        '.$row3['th_email'].'<br>'.$row3['th_mobile'].'<br></h5>
                            <p class="mb-0">'.$row3['descp'].'</p><br>
                            <a href="'.$row3['web_link'].'" class="btn btn-primary" target="_blank">KNOW MORE</a>
                        </figcaption>
                    </figure>
                </div>';}?>
            </div>
        </div>
    </div>

    <div class="container my-3 my-sm-5">
        <div class="mb-sm-4">
            <h2 class="text-center mb-sm-4">IS THERAPY WORTH THE MONEY?</h2>
            <p>Spending more money on a therapist while still dealing with the financial aftermath of divorce may
                seem
                irresponsible or a waste. It’s not.</p>

            <p>Our therapists will create a safe space for you to express every aspect of yourself. Even the ugly stuff.
                Because
                even the best of us have probably said something in front of our kids about the divorce that we
                shouldn’t have.
                Broken down or vented or lost our temper. Therapy doesn’t just help you identify the why and help
                you
                cope, it
                helps you forgive yourself.</p>

            <p>All factors considered, therapy is beneficial and cost-effective for those suffering from emotional
                distress.
                The most important factor is that the person must want to get better. While some of the benefits of
                therapy do
                not have a monetary value attached to them, for each person the cost-benefit analysis might be
                different.
                However, the common consensus is that therapy helps people get better more often than not.</p>

            <p>Investing in therapy signals to your internal system that you value your mental and emotional
                wellbeing.
                Seeking
                therapy can take courage, so if you’re considering therapy, congratulations – you’re already halfway
                there!
            </p>
        </div>
    </div>

    <div id="rev">
        <h2 class="text-center mb-sm-4">CLIENT REVIEWS</h2>
        <div class="row mb-4" id="client">
            <?php 
            $sql = "SELECT * FROM therapy_clients WHERE cl_city = '".$city."';";
            $stmt = $pdo->query($sql);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            echo'<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="card" style="height:400px;overflow-y:auto;">
                    <div class="card-header small">Published: <time datetime="2021-01-30">'.$row['cl_date'].'</time></div>
                    <div class="card-body">
                        <h4 class="card-title">'.$row['cl_name'].'</h4>
                        <p class="card-text">'.$row['cl_exper'].'</p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>';}?>
        </div>
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

                        <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">(123)
                            456-7890</a><br>
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
                data:{city_id:city_id, page:"therapy"},
                success: function(data){
                    $('#orgi').html(data);
                }
            })
            $.ajax({
                url:"indi_load.php",
                method: "POST",
                data:{city_id:city_id, page:"therapy"},
                success: function(data){
                    $('#indi').html(data);
                }
            })
            $.ajax({
                url:"client_load.php",
                method: "POST",
                data:{city_id:city_id},
                success: function(data){
                    $('#client').html(data);
                }
            })
        });
    });
    </script>
</body>

</html>
