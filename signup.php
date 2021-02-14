<?php
require_once "pdo.php";
session_start();
if(isset($_POST['email']) && isset($_POST['pswd'])){
            if ( strlen($_POST['email']) < 1 || strlen($_POST['pswd']) < 1 ) {
            $_SESSION["error"] = "User Email and password are required";
            header( 'Location: signup.php' ) ;
            return;
            }else {
                unset($_SESSION["account"]); 
                
                    $_SESSION["account"] = htmlentities($_POST['email']);
                    $sql = "SELECT * FROM login_master where email = :email ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(array(':email' => htmlentities($_POST['email'])));
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if(count($rows)==0){
                        $sql2 = "INSERT INTO login_master ( username,email, pswd,mobile) VALUES ( :name, :email, :pswd, :mob)";
                        $stmt = $pdo->prepare($sql2);
                        $stmt->execute(array(
                            ':name' => htmlentities($_POST['name']),
                            ':email' => htmlentities($_POST['email']),
                            ':pswd' => htmlentities($_POST['pswd']),
                            ':mob' => htmlentities($_POST['mob']))
                        );
                        $_SESSION["success"] = "Record Inserted";
                        $_SESSION["username"] = htmlentities($_POST['user']);
                        header( 'Location: login.php' );
                        return;
                    } else {
                        $_SESSION["error"] = "Already Registered. Please Log in";
                       header( 'Location: login.php' ); 
                       return;
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

        <link rel="stylesheet" href="css_jobs/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
   
    
        <!-- Custom CSS-->
        <link rel="stylesheet" href="css_jobs/profile-design.css">
        
        <title>SignUp</title>
    </head>

    <body style="background-image: url('https://images.pexels.com/photos/218863/pexels-photo-218863.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');">
<div id="bod">
    <div class="container my-3 my-sm-5 prodiv" style="background-color: #ffffff;opacity: 0.8;
        border: 1px solid black;
        border-radius: 50px;
        padding: 10px;
        margin: 5% auto;
        width: 30%;"">
        <header style="margin: 0 35%;">
                <h1>SignUp</h1>
            </header>
            <form method="POST" enctype="multipart/form-data" style="margin: 0 auto;">
                <div class="row">
                    <div class="col-12 col-sm-6" style="margin: 0 auto;">
                        <div class="form-group">
                          <label for="email">Email*</label>
                          <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6" style="margin: 0 auto;">
                        <div class="form-group">
                          <label for="user">Username*</label>
                          <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6" style="margin: 0 auto;">
                        <div class="form-group">
                          <label for="mob">Mobile*</label>
                          <input type="text" class="form-control" id="mob" name="mob">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6" style="margin: 0 auto;">
                        <div class="form-group">
                          <label for="pswd">Password*</label>
                          <input type="pswd" class="form-control" id="pswd" name="pswd" required>
                        </div>
                    </div>
                </div>
                    <div class = "row"> 
                        <div style="margin: 0 auto;">
                    <input type="reset" class="buttons" value="Reset">
                    <input type="submit" name="submit" class="buttons" value="Submit">
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