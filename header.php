<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="http://srisrinivastravels.com/bluewhale/img/favicon.png"/>
    <title>BLUEWHALE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/simplePagination.css" />
</head>
<body class="body">
<nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo-dark2.png" class="img-responsive" alt="">
        </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($activePage =='home'){echo 'active';}?>"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown <?php if($activePage =='solutions'){echo 'active';}?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solutions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="container m-scroll">
                            <div class="row pt-3 ">
                                <div class="col-md-4 lh">
                                    <span class="d-h">Big Data</span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="datawarehousing.php">Data Warehousing</a></li>
                                        <li class="nav-item"><a class="nav-link" href="bi.php">Business Intelligence</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="iot.php">Real time (IoT)</a></li>
                                    </ul>
                                </div><!-- /.col-md-4  -->
                                <div class="col-md-4 lh">
                                    <span class="d-h">Data Science </span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="predictiveanalytics.php">Predictive Analytics</a></li>
                                        <li class="nav-item"><a class="nav-link" href="reinforcementlearning.php">Reinforcement Learning</a></li>
                                        <li class="nav-item"><a class="nav-link" href="deeplearning.php">Deep Learning </a></li>
                                    </ul>
                                </div><!-- /.col-md-4  -->
                                <div class="col-md-4 lh">
                                    <span class="d-h active">Other Services</span>
                                       <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="rpa.php">Robotic Process Automation</a></li>
                                        <li class="nav-item"><a class="nav-link" href="publiccloudmigration.php">Public Cloud Migration</a></li>
                                        <li class="nav-item"><a class="nav-link" href="devops.php">Devops</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blockchain.php">Block Chain</a></li>
                                        <li class="nav-item"><a class="nav-link" href="training.php">Training</a></li>
                                    </ul>
                                </div><!-- /.col-md-4  -->
                            </div>
                        </div><!--  /.container  -->
                    </div>
                </li>
                <li class="nav-item <?php if($activePage =='blogs'){echo 'active';}?>"><a class="nav-link" href="blogs.php">Blog</a></li>
                <li class="nav-item <?php if($activePage =='careers'){echo 'active';}?>"><a class="nav-link" href="careers.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            </ul>
        </div>
    </div>
</nav>