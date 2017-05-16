<?php
$pagetitle = 'Løve´s Bog- og Vincafé';
$pagelogo = 'images/bogcafelogohvidskygge.png';
include( "header.php" )
?>

<!--Stor video-->
<div id="bogvideo" class="storvideo">
	<video loop autoplay>
		<source src="video/bogcafe.mp4" type="video/mp4">
	</video>
	<audio autoplay loop id="music">
  <source src="audio/bensound-thejazzpiano.mp3" type="audio/mpeg">
</audio>
</div>
<!--ØVERSTE TEKSTKASSE MED PAPIRBAGGRUND-->
<div class="velkomstkasse">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12">Velkommen til Løve's Bogcafé</h1>
			<div class="col-sm-6 col-md-7">
				<p>Kære gæst
					<br>
					<br> Velkommen til Løve's Bog- og VinCafé. Stedet, hvor litteratur, mad & vin hænger uløseligt sammen og hvor kulturen er levende.
					<br> Vi er både en boghandel, der sælger nye bøger, en café med mad og drikke, en vinbar, der har mere end 130 forskellige, egen importerede vine fra hele Europa, og et kultursted med masser livearrangementer i form af koncerter, oplæsning, foredrag og poesievents.
					<br> Så hvad enten du mangler en bog, en bid mad, et glas vin eller bare har lyst til at komme ud, så kig forbi Nørregade 32.
					<br>
					<br> Med venlig hilsen Løve's Bog- og VinCafé</p>
			</div>
				<div class="col-sm-3">
				<img src="images/loevesgamlelogo.png" width="200px" alt="">
			</div>
			<div class="col-sm-3 col-md-2 abningstider">
				<h5>Åbningstider</h5>
				<p>
					Mandag: Lukket <br> Tirsdag: 16-22 <br> Onsdag: 16-22 <br> Torsdag: 16-24 <br> Fredag: 15-24 <br> Lørdag: 15-24 <br> Søndag: Lukket </p>
			</div>
		</div>
	</div>
</div>
<!--CAROUSEL-->

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
			<img src="images/carouselbillede1.JPG" alt="">
			<div class="carousel-caption boks">
				<h3>Løve's Bogklub</h3>
				<h4>Hver 2. tirsdag i hver måned klokken 19</h4>
				<p>
				Et uforpligtende forum, hvor vi samles om litteratur og vender nogle af de tanker, bøger skaber under og efter læsningen.
<br>

Valget af bøger foretages i fællesskab og kan købes i bogcafeen. Du kan tilmelde dig til BogKlubben ved at skrive en mail til aa-cafe@loeves.dk med dit navn og emailadresse eller komme ned i bogcafeen og blive skrevet op.</p>
			</div>
		</div>

		<div class="item">
			<img src="images/carouselbillede1.JPG" alt="">
			<div class="carousel-caption boks">
				<h3>Åben Poetisk Scene</h3>
				<h4>Hver 2. og 4. onsdag i måneden fra kl. 19.30-22.30</h4>
				<p>Åben Poetisk Scene er som navnet antyder, en åben scene hvor kreative ordgøglere, kvistværelsesspoeter - eller kort sagt: skrivende af alle slags! - kan komme og prøve deres ting af - få dem ud over scenen, op fra skrivebordsskuffen og fremført for et publikum. Og nysgerrige kan komme og få sig en god oplevelse som publikum.
				<br>
<br>


Åben Poetisk Scene arrangeres af Poetklub Århus og har kørt i mange år forskellige steder i Århus, men har nu fundet et fast sted i Løve's Bog- og VinCafé, der i forvejen står for flere litterære og kulturelle arrangementer; det samme gør Poetklub Århus jo - så på den måde er det et godt match.</p>
			</div>
		</div>

		<div class="item">
			<img src="images/carouselbillede1.JPG" alt="">
			<div class="carousel-caption boks">
				<h3>Y Aarhus Poetry Club</h3>
				<h4>Den 3. onsdag i måneden kl. 19:30</h4>
				<p>Y Aarhus Poetry Club er en klub for poeter og musikere og historiefortællere, dansere og mange andre poetiske folk.<br>
Klubben, som er en søster-klub til Y Tuesday Poetry Club i London, har eksisteret i 3 år på mange forskellige scener i Aarhus' underverden, men nu har den fundet sit eget tilholds sted på Løve's Bog- og VinCafé.<br>
<br>
Kom og læs dine digte op eller spil en sang!<br>


Kunstnere, musikanter, poeter og danserinder kommer langvejs fra for at optræde på vores scene - men der er osse en plads til dig på scenen! </p>
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


<!--MENU-->
<div class="tavle">
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
				<p class="menuindhold">For os er det vigtigt, at vores gæster har mulighed for at smage en masse forskelligt, så vi har valgt ikke at have faste vine på glas, men derimod åbne forskellige flasker alt efter udbuddet. På denne måde kan vi hver dag tilbyde nye vine på glas, samt give dem, der vil købe vin med hjem, mulighed for at smage, før de køber.<br>
					<br> Priserne på vin ud af huset er naturligvis billigere end vine, der nydes i caféen, men uanset om du nyder vin hos os eller derhjemme, så er der altid gode priser. Og hvis man køber flere vine med hjem, er der selvfølgelig også mulighed for at få rabat, ligesom glasprisen på vine, der nydes i caféen, er ¼ af flaskeprisen, hvilket betyder, at man får det 5. glas gratis, når man køber en flaske.<br>

					<img src="images/loevesgamlelogo.png" alt="" width="150px" class="pull-right"></p>
			</div>
		</div>
	</div>
</div>
<!--FOOTER-->
<footer>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.783941425167!2d10.207170815946487!3d56.16084018066449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f9672508429%3A0x496f81dc47a6f9cd!2zTMO4dmXigJlzIEJvZy0gb2cgVmluQ2Fmw6k!5e0!3m2!1sda!2sdk!4v1494836083339" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php include( 'footer.php' )?>