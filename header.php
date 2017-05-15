<!DOCTYPE html>
<html id="vinsite" lang="da">
  <head>
   <!--metatags-->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!--title-->
    <title> <?php echo $pagetitle;?> </title>
    <!-- Bootstrap og stylesheet -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
	<!--icon-->
	
  </head>
  <body>
  <div class="container-fluid">
  <!--Logo og nav-->
  <nav>
  <img src="<?php echo $pagelogo;?>" alt="" id="logo">
  
  <ul>
  <li class="lydknapper"><img src="images/playbutton.png" alt="afspil musik" onClick="playAudio()"> <img src="images/mutebutton2.png" alt="sluk musikken" onClick="pauseAudio()"></li> 
  	<li><a href="vincafe.php">Vincafé</a></li>
  	<li><a href="bogcafe.php">Bog- og Vincafé</a></li>
  	<li><a href="kontakt.php">Kontakt</a></li>
  </ul>
  </nav>