<!DOCTYPE html>
<html id="vinsite" lang="da">
  <head>
   <!--metatags-->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!--title-->
    <title> <?php echo $pagetitle;?> </title>
    <!--Skrifttyper-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap og stylesheet -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
	<!--icon-->
	<link rel="icon" href="images/loevesicon.ico">
	
  </head>
  <body onLoad="<?php echo $menufunktion;?>">
  <div class="container-fluid">
  <!--Logo og nav-->
  
  <a href="index.html"><img src="<?php echo $pagelogo;?>" alt="" id="logo"></a>
  <nav>
  <ul class="boks">
  <li class="lydknapper"><img src="images/playbutton.png" alt="afspil musik" onClick="playAudio()"> <img src="images/mutebutton2.png" alt="sluk musikken" onClick="pauseAudio()"></li> 
  		<li><a href="bogcafe.php">Bog- og Vincafé</a></li>
  		<li><a href="vincafe.php">Vincaféen</a></li>
  	<li><a href="kontakt.php">Kontakt</a></li>
  </ul>
  </nav>
  <div class="nav2">
  

  
 
<div class="panel-group">
  <div class="panel">
    <div class="panel-heading boks">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1"><img src="images/burgermenu.png" width="25px" alt=""></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse boks">
      <ul class="list-group">
        <li class="list-group-item "><a href="index.html">Forside</a></li>
        <li class="list-group-item"><a href="bogcafe.php">Bog- og Vincafé</a></li>
        <li class="list-group-item"><a href="vincafe.php">Vincaféen</a></li>
        <li class="list-group-item"><a href="kontakt.php">Kontakt</a></li>
		</ul>
    </div>
  </div>
</div>
  </div>