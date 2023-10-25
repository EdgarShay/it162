<?php include "portal-config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/blueberry.css" type="text/css">

    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />


</head>

<body>

<!-- START WRAPPER -->
<!-- <main class="wrapper">  -->


<!-- <body class="home"> -->
    <ul class="social">
        <li><a href="">
            <img src="images/facebook.jpg"
            alt="Facebook logo">
            </a></li>
            <li><a href="">
                <img src="images/twitter.jpg"
                alt="twitter logo">
                </a></li>
                <li><a href="">
                    <img src="images/instagram.jpg"
                    alt="Instagram logo">
                    </a></li>
    </ul>
   
    <main class="wrapper"> 

    <header>


  <!-- <h1><a href="index.php"><i class="logo fa fa-home"></i> (Edgar Vargas SCC IT162 Portal Page)</a></h1> -->
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> (Edgar Vargas SCC IT162 Portal Page)</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav)?>
    <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Edgar</a></li>
-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>

<h2 class="pageID"><?=$PageID?></h2>





<!-- START WRAPPER -->
<!-- <main class="wrapper">  -->


<!-- i moved the header part and the rest of the code to includes/ header.php -->