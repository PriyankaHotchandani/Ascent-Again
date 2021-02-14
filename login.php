<?php
    require_once "pdo.php";
    session_start();
    if ( isset($_POST['email']) && isset($_POST['pswd']) ) {
        if ( strlen($_POST['email']) < 1 || strlen($_POST['pswd']) < 1 ) {
            $_SESSION["error"] = "User Email and password are required";
        } else {
            unset($_SESSION["account"]);             
            $sql = "SELECT * FROM login_master where email = :email and pswd = :pswd ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                    ':email' => htmlentities($_POST['email']),
                    ':pswd' => htmlentities($_POST['pswd'])));
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($rows)==0){
                $_SESSION["error"] = "Incorrect Credentials";
                header( 'Location: login.php' );
                return;
            } else {
                $_SESSION["success"] = "Logged in";
                $_SESSION["account"] = htmlentities($_POST['email']);
               header( 'Location: forum_first.php' ); 
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar-styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
   
    
        <!-- Custom CSS-->
        <link rel="stylesheet" href="css_jobs/profile-design.css">
        
        <title>Login</title>
    </head>

    <body style="background-image: url('https://images.pexels.com/photos/3178938/pexels-photo-3178938.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');">
<div id="bod">
    <div class="container my-3 my-sm-5 prodiv" style="background-color: #ffffff;opacity: 0.8;
        border: 1px solid black;
        border-radius: 50px;
        margin: 5% auto;
        width: 30%;">
        <header style="margin: 0 40%;">
                <h1>Login</h1>
            </header>
            <form method="POST" enctype="multipart/form-data" style="margin: 10% auto;">
                <div class="row ele" >
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="email">Email*</label>
                          <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row ele" style="margin-left: 58px;">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label for="pswd">Password*</label>
                          <input type="pswd" class="form-control" id="pswd" name="pswd" required>
                        </div>
                    </div>
                </div>
                <div class = "row" style="margin: auto 35%;"> 
                        <div>
                    <input type="reset" class="buttons" value="Reset">
                    <input type="submit" name="submit" class="buttons" value="Submit">
                </div>
                    </div>
                <div class = "row"  style="margin: 5% 26%;"> 
                        <div>
                            <a href="signup.php" style="text-decoration: none; color: black;">New User? Sign Up here</a>
                </div>
                    </div>
            </form>
            </div>
</div>

        <!-- jQuery first, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>