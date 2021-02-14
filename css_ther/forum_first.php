<?php
//first page of forum with category and forum names
require_once "pdo.php";
    session_start();
    if (!isset($_SESSION['account'])) {
        header('Location: login.php');
    }
    

?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">


  <!-- css bootstrap -->
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css_forum/index.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <title>Forum-Index</title>
</head>

<body>

  <!-- navbar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="">Discussion Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Index</a>
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
      <h2 class="th"><i>Board Index</i></h2>
    </div>



  </div>

  <div class="container">


    <div class="navToCat">
      <div class="row">
        <div class="feat-box col-lg-4">
          <i class="fas fa-bullseye feat-sym fa-3x"></i>
          <h3><a href="#category1">Category 1</a></h3>

          <p>decription decription decription</p>
        </div>
        <div class="feat-box col-lg-4">
          <i class="fas fa-bullseye feat-sym fa-3x"></i>
          <h3><a href="#category1">Category 2</a></h3>
          <p>decription decription decription</p>
        </div>
        <div class="feat-box col-lg-4">
          <i class="fas fa-bullseye feat-sym fa-3x"></i>
          <h3><a href="#category1">Category 3</a></h3>
          <p>decription decription decription</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container">

    <!--Board overview-->
    <div class="row">
      <div class="col-12">
          <?php 
            $sql = "SELECT * FROM forum_catgry";
            $stmt = $pdo->query($sql);
            $stmt->execute();
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                $id = $row['catg_id'];
                $name = $row['catg_name'];
                echo'<h2 class="h4 mb-0 p-4 rounded-top" id="category1"><a href="#">'.$name.'</a></h2>';
                
                echo'<table class="table1 table table-striped table-bordered" >
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="forum-col">Forum</th>
                      <th scope="col">Posts</th>
                      <th scope="col" class="last-post-col">Last post</th>
                    </tr>
                  </thead>';
                $sql2 = "SELECT DISTINCT forum_topics, table_name,forum_desc from forums WHERE catg_id = ".$id;
                $stmt2 = $pdo->prepare($sql2);
                $stmt2->execute();
                while ( $row2 = $stmt2->fetch(PDO::FETCH_ASSOC) ) { 
                    
                    $post_sum=0;
                    echo'<tbody>
                        <tr>
                        <td>
                        <h3 class="h5"><a href="topic.php?topic='.$row2['table_name'].'&forum='.$row2['forum_topics'].'">'.$row2['forum_topics'].'</a></h3>';
                        echo'<p class="mb-0">'.$row2['forum_desc'].'</p>';
                        $sql4 = "SELECT DISTINCT table_name FROM forums WHERE forum_topics ='".$row2['forum_topics']."'";                               
                        $stmt4 = $pdo->prepare($sql4);
                        $stmt4->execute();
                        $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $sql5 = "SELECT DISTINCT count(cont_id) as posts FROM ".$row4['table_name'].";";
                            $stmt5 = $pdo->prepare($sql5);
                            $stmt5->execute();
                            $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);  
                            $post_sum = $post_sum + $row5['posts'];
                                              
                         echo'<td><div>'.$row5['posts'].'</div></td>  ';
           
                        $sql3 = "SELECT * FROM ". $row4['table_name']. " WHERE cont_id = (SELECT max(cont_id) FROM ".$row4['table_name'].")";                               
                        $stmt3 = $pdo->prepare($sql3);
                        $stmt3->execute();
                        while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                           echo' <td>
                                <h4 class="h6"><a href="topic.php?topic='.$row4['table_name'].'">'.$row3['post_subject'].'</a></h4>
                                <div>by <a href="#0">'.$row3['comm_author'].'</a></div>
                                <div>'.$row3['post_time'].'</div>
                              </td>';
                                                                                               
                                }
                                echo'</tr>';
                           }
                           echo' </tbody>
                                </table>';
                            }                
                    ?>   
          
                               
              
             

      </div>
        </div>
  </div>

      <footer class="small bg-dark text-white">
              <div class="foot container py-4">
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

</html>
