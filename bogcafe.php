<?php $pagetitle = 'Løve´s Bog- og Vincafé'; 
$pagelogo = 'images/bogcafelogo.png';
include("header.php")?>
 
  <!--Stor video-->
  <div id="bogvideo" class="storvideo">
  <video loop autoplay>
  <source src="video/vincafe.mp4" type="video/mp4">
</video>
  </div>
  <!--Velkomsttekst-->
  <div class="velkomstkasse">
  <div class="container">
  <div class="row">
  	<h1 class="col-xs-12">Velkommen til Løve's Bogcafé</h1>
  	<div class="col-sm-10">
  		<p>Kære gæst
<br>
<br>

Velkommen til Løve's Bog- og VinCafé. Stedet, hvor litteratur, mad & vin hænger uløseligt sammen og hvor kulturen er levende.
<br>

Vi er både en boghandel, der sælger nye bøger, en café med mad og drikke, en vinbar, der har mere end 130 forskellige, egen importerede vine fra hele Europa, og et kultursted med masser livearrangementer i form af koncerter, oplæsning, foredrag og poesievents.
<br>

Så hvad enten du mangler en bog, en bid mad, et glas vin eller bare har lyst til at komme ud, så kig forbi Nørregade 32. 
<br>
<br>

Med venlig hilsen Løve's Bog- og VinCafé</p>
  	</div>
  	<div class="col-sm-2 abningstider">
  <h5>Åbningstider</h5>
	<p>
  	Mandag: Lukket <br>

Tirsdag: 16-22 <br>

Onsdag: 16-22 <br>

Torsdag: 16-24 <br>

Fredag: 15-24 <br>

Lørdag: 15-24 <br>

Søndag: Lukket </p></div>
  </div></div></div>
  <!--CAROUSEL-->
  <div class="">
  <div id="bogeventscarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#bogeventscarousel" data-slide-to="0" class="active"></li>
						<li data-target="#bogeventscarousel" data-slide-to="1"></li>
						<li data-target="#bogeventscarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/carouselbillede1.JPG" alt="" >
							<div class="carousel-caption boks">
							<h3>Event titel</h3>
								<p>Vin fra Spanien</p>
							</div>
						</div>

						<div class="item">
							<img src="images/carouselbillede1.JPG" alt="">
							<div class="carousel-caption boks">
							<h3>Event titel</h3>
								<p>Vin fra Italien</p>
							</div>
						</div>

						<div class="item">
							<img src="images/carouselbillede1.JPG" alt="">
							<div class="carousel-caption boks">
							<h3>Event titel</h3>
								<p>Vin fra Tønder</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#bogeventscarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
				
					<a class="right carousel-control" href="#bogeventscarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
				
				</div>
</div>
	  
	  <!--MENU-->
	  <div id="menuid">
	  <div class="container">
	  <div class="row">
			<h2>Menu</h2>
			<div class="col-sm-6 bogmenuimg">
				<img src="images/20170503_120644.jpg" alt="" width="100%">
				
			</div>

			<div class="col-sm-6">
				<div class="row">
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" id="bvarmt">Varmt</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" id="bkoldt">Koldt</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" id="bmad">Mad</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" id="bvinkort">Vinkort</h4>
				</div>
				<p id="menuindhold">For os er det vigtigt, at vores gæster har mulighed for at smage en masse forskelligt, så vi har valgt ikke at have faste vine på glas, men derimod åbne forskellige flasker alt efter udbuddet. På denne måde kan vi hver dag tilbyde nye vine på glas, samt give dem, der vil købe vin med hjem, mulighed for at smage, før de køber.<br>
					<br> Priserne på vin ud af huset er naturligvis billigere end vine, der nydes i caféen, men uanset om du nyder vin hos os eller derhjemme, så er der altid gode priser. Og hvis man køber flere vine med hjem, er der selvfølgelig også mulighed for at få rabat, ligesom glasprisen på vine, der nydes i caféen, er ¼ af flaskeprisen, hvilket betyder, at man får det 5. glas gratis, når man køber en flaske.</p>
			</div>
		</div>
</div>
</div>
	  <?php include('footer.php') ?>