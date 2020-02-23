<?php
require("./database/database.php");
session_start();
$username = $_SESSION['username'];
if (empty($username)) {
    header("Location:home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <style>


#story-container .nav-link.active{
    color:red;
    background-image:url(./images/hover.png);
    background-repeat:no-repeat;
    background-position:bottom;
    padding-bottom:15px;
    background-size:0 0;
    -webkit-animation:hover 1s;
    -o-animation: hover 1s;
    -moz-animation: hover 1s;
    animation:hover 1s;
    animation-fill-mode:forwards;
 }
 @keyframes hover{
  0%{
      background-size:0 0;
  }
  100%{
      background-size:90% 15px;
  }
 }
    </style>
</head>

<body>
    <?php
    include_once("./design/navbar.php");
    ?>

    <div class="container-fluid p-0" style="margin-top:-25px;">
        <img src="./photos/blog-banner (1).jpg" class="w-100">
        <div class="" style="position:fixed;bottom:0px;right:10px;">
          <img src="./photos/21-woman-girl-png-image.png" width="250px">
        </div>
    </div>
    <div class="container-fluid" style="height: 900px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 id="story-header" class="mb-4 mt-5">Blogs/Articles</h2>
                <ul class="nav nav-tabs border-0" id="story-container">
                    <li class="nav-item"><a href="#overview" class="nav-link active border-0"
                            data-toggle="tab">Overview</a></li>
                    <li class="nav-item"><a href="#founder" class="nav-link border-0" data-toggle="tab">Create blog</a></li>
                    <li class="nav-item"><a href="#mission" class="nav-link border-0" data-toggle="tab">Our Mission</a></li>
                </ul>
                <div class="tab-content py-4">
                    <div id="overview" class="tab-pane wow slideInLeft active">
                   

                    </div>
                    <div id="founder" class="tab-pane animated slideInRight faster">
                        
                    </div>
                    <div id="mission" class="tab-pane animated zoomIn">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <?php include_once("./design/footer.php") ?>

    <script src="./js/index.js"></script>
</body>

</html>