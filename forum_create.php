<?php
//new forum creation
    require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
        return;
    }
    if(isset($_POST["topic"]) && isset($_POST["comment"])){
        $forum_top = trim($_GET["forum_top"]);
        $sql = "SELECT * FROM forums WHERE forum_topics = '".$forum_top."'";        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $table = htmlentities($_POST["topic"]);
        $tab_exp = trim($table);
        $exp = explode(' ', $table);
        $tab_name = $exp[0]."_".$row['topic_id'];        
        
        $sql2 = "CREATE TABLE `".$tab_name."` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
";
        //echo $sql2;
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();
        
        $sql3 = "INSERT INTO ".$tab_name."(`content`, `comm_author`, `post_time`, `post_subject`)"
                . "VALUES(:comm, :auth, now(), :name)";
        $stmt3 = $pdo->prepare($sql3);
        $stmt3->execute(array(
                            ':comm' => htmlentities($_POST['comment']),
                            ':auth' => $_SESSION['account'],
                            ':name' => htmlentities($_POST['topic']))
                        );
        $sql4 = "INSERT INTO forums (`forum_id`,`catg_id`,`forum_names`,`forum_topics`,`table_name`) VALUES (".$row['forum_id'].",".$row['catg_id'].",'".$row['forum_names']."','".$table."','".$tab_name."')";
        //echo $sql4;
        $stmt4 = $pdo->prepare($sql4);
        $stmt4->execute();
        $_SESSION["success"] = "Forum Created";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css_forum/newTopic.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Forum- Create a New Topic</title>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="forum_first.php">Connect</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Index</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="jobs.php">Jobs</a>
           </li>
           <li class="nav-item">
                <a class="nav-link" href="therapy.php">Therapy</a>
           </li>
           <li class="nav-item active">
                <a class="nav-link" href="forum_first.php">Connect</a>
           <li>
            <li class="nav-item">
                <a class="nav-link" href="tidings.php">Tidings</a>
            </li>
          <li class="nav-item">
            <div class="btn-group">
              <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="nav-link"><a href="index.html #category1">Category 1</a></button>
                <button class="dropdown-item" type="button"><a href="index.html #category1">Category 2</a></button>
                <button class="dropdown-item" type="button"><a href="index.html #category1">Category 3</a></button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
        <div class="topic-heading">
          <h2 class="th"><i>Create New Topic</i></h2>
        </div>

        <div class="form-align">
            <form class="mb-3" method="POST">
            <div class="form-group">
              <label class="labelling" for="topic">Title:</label>
              <input type="text" class="form-control" id="topic" placeholder="Give your topic a title" style="width:40%;" required>
            </div>
            <div class="form-group">
              <label class="labelling" for="comment">Comment:</label>
              <textarea class="form-control" id="comment" rows="10" placeholder="Write your comment here" style="width:40%;" required></textarea>
            </div>
            <p>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox" value="notification">
                <label class="form-check-label" for="checkbox">Notify me upon replies</label>
              </div>
            </p>

            <button type="submit" class="btn btn-outline-dark">Create Topic</button>
            <button type="reset" class="btn btn-dark">Reset</button>
          </form>
        </div>

      <footer class="small bg-dark text-white">
                <div class="container py-4">
                    <ul class="list-inline mb-0 text-center">
                        <li class="list-inline-item">&copy; 2017 Web Company, Inc.</li>
                        <li class="list-inline-item">All rights reserved.</li>
                        <li class="list-inline-item"><a href="#">Terms of use and privacy policy</a>.</li>
                    </ul>
                </div>
            </footer>

            <!-- jQuery first, then Bootstrap JS -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>

        </body>

        <style media="screen">
        body{
          background-image: url(https://images.pexels.com/photos/19670/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
          background-repeat: repeat-y;
          background-size: 100% 100%;
          
        }
        </style>
</body>

</html>
