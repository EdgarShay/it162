
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT162 My Portal Website </title>
    <link rel="stylesheet" href="css/blueberry.css" type="text/css">

    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />


</head>

<body>

<!-- START WRAPPER -->
<!-- <main class="wrapper"> -->


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
    <header>

<!-- START WRAPPER -->
<main class="wrapper">


  <h1><a href="index.php"><i class="logo fa fa-home"></i> (Edgar Vargas SCC IT162 Portal Page)</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Edgar</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<!-- START LEFT COL -->
<section>
  
<h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->

  <p> Hello my name is Edgar Vargas. I moved to Seattle from Puerto Vallarta, Mexico almost eight years ago. So, my first language is Spanish. This is my four Web Development class here at Seattle Central College. I have a wonderful wife and a handsome boy. <strong>My goal is to earn my certificate in Web Development and eventually get my degree in computer science</strong>. By gaining experience and skills I plan to grow my career. Besides my education I have two real passions. The first is spending time with my wife and son. My other passion is to working out in the gym. </p>
  <img src="images/edgar_desktop.jpg" class="edgar_desktop" alt="" />

 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h2>My Interest</h2>
<img src="images/antho_phone.jpg" class="antho_phone" alt="" />
<img src="images/tablet.jpg" class="tablet" alt="" />
<p>Ultimately, I will like to find a better job and a career with better pay opportunity. <em>This will allow me to buy a home and nicer car</em>. As well as create more security for my family. 
</p>
</aside>
<!-- END RIGHT COL -->



<!-- START Footer -->
<footer>
      <p><small>&copy; 2023-<?=date("Y")?> by 
          <a href="contact.php">Edgar Vargas</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
          
          <img src="images/html5.png" alt="HTML 5 logo">
     </p>
    </footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

<script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
</script>


</body>
</html>
