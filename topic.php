<?php
//posts under a forum topic redirected from forum_topics on clicking post title
require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
        return;
    }
    $topic_name;
    $forum_name;
    if(isset( $_GET["topic"])){
        $topic_name = $_GET["topic"];
        $_SESSION['topic'] = $topic_name;        
    }
    if(isset( $_GET["forum"])){
        $forum_name = $_GET["forum"];
        $_SESSION['forum'] = $forum_name;   
        
    }
    
    if(isset($_POST['comment'])){
        $sql2 = "SELECT username FROM login_master WHERE email ='". $_SESSION['account']."'";
         $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        $sql = "INSERT INTO ".$_SESSION['topic']."(`content`, `comm_author`, `post_time`, `post_subject`)"
                . "VALUES(:comm, :auth, now(), :comm)";   
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':auth' => $row2['username'], 
                             ':comm' => htmlentities($_POST['comment'])));
        header('Location:topic.php');
        return;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css_forum/post.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">



    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Forum- Post</title>
  </head>
  <body>
<!-- navbar -->
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
            <a class="nav-link" href="forum_create.php?forum_top=<?php echo $forum_name;?>">Add New Post</a>
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

</div>

<div class="topic-heading">
  <h2 class="th"><i>Post</i></h2>
</div>

<div class="container my-3 post-box">

        <!--Board overview-->
        <div class="row">
            <div class="col-12">
                <h2 class="h4 mb-0 p-4 rounded-top heading2" id="forum1"><?php echo $forum_name;?></h2>
                
                    <!-- <thead class="thead-light">
                        <tr>
                            <th scope="col">Author</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead> -->
                   
                        <?php  
                    $sql4 = "SELECT * FROM ".$_SESSION['topic']." ORDER BY cont_id DESC LIMIT 15";   
                    //echo $sql4;
                    $stmt4 = $pdo->prepare($sql4);
                    $stmt4->execute();
                    while ( $row4 = $stmt4->fetch(PDO::FETCH_ASSOC) ){ 
                    
                    echo'<table class="table1 table table-striped table-bordered table-responsive-lg">
                         <tbody>
                        <tr>
                            <td class="author-col" id="authcol">
                                <div>by <a href="#">'.$row4['comm_author'].'</a></div>
                            </td>
                            <td class="post-col d-lg-flex justify-content-lg-between">
                                <div><span class="font-weight-bold">Post subject:</span>'.$row4['post_subject'].'</div>
                                <div><span class="font-weight-bold">Posted:</span>'.$row4['post_time'].'</div>
                            </td>
                        </tr>';
                    $sql2 = "SELECT join_date FROM login_master WHERE username = '".$row4['comm_author']."'";
                     $stmt2 = $pdo->prepare($sql2);
                    $stmt2->execute();
                    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                        echo'<tr>
                            <td>
                                <div><span class="font-weight-bold">Joined:</span><br>'.$row2['join_date'].'</div>
                                <div><span class="font-weight-bold">Posts:</span><br>123</div>
                            </td>
                            <td>
                                <p>'.$row4['content'].'</p>
                            </td>
                        </tr>
                        </tbody>
                </table>';
                    }
                    ?>
                    
               
            </div>
        </div>
        <form class="mb-3" method="POST">
            <div class="form-group">
                <label for="comment">Reply to this post:</label>
                <textarea class="form-control" id="comment" name="comment" rows="10" placeholder="Write your comment here."
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Reply</button>
            <button type="reset" class="btn btn-outline-dark">Reset</button>
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
</html>
