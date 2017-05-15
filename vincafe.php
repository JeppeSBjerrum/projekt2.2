<?php $pagetitle = 'Vincaféen'; 
$pagelogo = 'images/vincafelogo.png';
include( "header.php" );
?>
  <!--Stor video-->
  <div id="vinvideo" class="storvideo">
  <video loop autoplay>
  <source src="video/vincafe.mp4" type="video/mp4">
</video>
 <audio autoplay loop>
  <source src="audio/bensound-love.mp3" type="audio/mpeg">
</audio>
  </div>
 
<!--ØVERSTE TEKSTKASSE MED PAPIRBAGGRUND-->
<div class="velkomstkasse">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12">Velkommen til Løve's Vincafé</h1>
			<div class="col-sm-6 col-md-7">
				<p>Kære gæst
					<br>
					<br> Vincaféen er Løve's nye sted, hvor vinhandel, deli & café får sit helt eget udtryk i hyggelige, rustikke og levende omgivelser. Vores fokus ligger på selvimporterede kvalitetsvine til gode priser, forskellige hjemmelavede delikatesser, spændende oste, pølser, skinker og andre gode mad- og drikkevarer, som enten kan nydes i vincaféen eller tages med hjem til favorable priser.
					<br>
					<br> Vores mål er at skabe et sted, hvor kvalitet, hygge og professionalisme går op i en højere enhed; et sted, hvor man samles om vin, mad og kaffe; hvor man mødes og får et glas, før man tager videre; hvor man slapper af med lidt mad og drikke eller køber vinen, osten og tilbehøret med hjem til aftensmaden. Kort og godt et sted, hvor vin, mad, café og kultur går op i en højere enhed.</p>
			</div>
			<div class="col-sm-3">
				<img src="images/loevesgamlelogo.png" width="200px" alt="">
			</div>
			<div class="col-sm-3 col-md-2 abningstider">


				<h5>Åbningstider</h5>
	<p>Mandag: Lukket <br> Tirsdag: 16-22 <br> Onsdag: 16-22 <br> Torsdag: 16-24 <br> Fredag: 15-24 <br> Lørdag: 15-24 <br> Søndag: Lukket </p>
			</div>
		</div>
	</div>
</div>
<!--CAROUSEL-->

<!--MENU-->
<div class="tavle">
	<div class="container">
		<div class="row">
			<h2>Menu</h2>
			<div class="col-sm-6 menucarousel">
				<!--CAROUSEL-->
				<div id="vinmenucarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#vinmenucarousel" data-slide-to="0" class="active"></li>
						<li data-target="#vinmenucarousel" data-slide-to="1"></li>
						<li data-target="#vinmenucarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/loevesvand.jpg" alt="" style="width:100%;">
							<div class="carousel-caption boks">
								<p>Vin fra Spanien</p>
							</div>
						</div>

						<div class="item">
							<img src="images/loevesvand.jpg" alt="" style="width:100%;">
							<div class="carousel-caption boks">
								<p>Vin fra Italien</p>
							</div>
						</div>

						<div class="item">
							<img src="images/loevesvand.jpg" alt="" style="width:100%;">
							<div class="carousel-caption boks">
								<p>Vin fra Tønder</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#vinmenucarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
				
					<a class="right carousel-control" href="#vinmenucarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
				
				</div>

			</div>

			<div class="col-sm-6" id="menu">
				<div class="row">
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" onClick="vvinkort()">Vinkort</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom btn" onClick="vlordagsmad()">Lørdagsmad</h4>
					<h4 class="col-xs-4 col-sm-2 btn-custom btn" onClick="vvarmt()">Varmt</h4>
					<h4 class="col-xs-4 col-sm-2 btn-custom btn" onClick="vkoldt()">Koldt</h4>
					<h4 class="col-xs-4 col-sm-2 btn-custom btn" onClick="vmad()">Mad</h4>
				</div>
				<p class="menuindhold">For os er det vigtigt, at vores gæster har mulighed for at smage en masse forskelligt, så vi har valgt ikke at have faste vine på glas, men derimod åbne forskellige flasker alt efter udbuddet. På denne måde kan vi hver dag tilbyde nye vine på glas, samt give dem, der vil købe vin med hjem, mulighed for at smage, før de køber.<br>
					<br> Priserne på vin ud af huset er naturligvis billigere end vine, der nydes i caféen, men uanset om du nyder vin hos os eller derhjemme, så er der altid gode priser. Og hvis man køber flere vine med hjem, er der selvfølgelig også mulighed for at få rabat, ligesom glasprisen på vine, der nydes i caféen, er ¼ af flaskeprisen, hvilket betyder, at man får det 5. glas gratis, når man køber en flaske.<br>

					<img src="images/loevesgamlelogo.png" alt="" width="150px" class="pull-right"></p>
			</div>
		</div>

	</div>
</div>
<div id="smagningid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 boks smagning">
				<h2>Privat vinsmagning</h2>
				<p>Hvis du mangler et sted at holde din fest, fødselsdag, reception, polterabend, konfirmation eller andet selskabelighed, så har vi lokalerne til dig. I hyggelige og rustikke omgivelser tilbyder vi ikke blot et lokale med plads til mere end 30 personer, men også en velrustet bar, et godt køkken og ikke mindst søde vintjenere. Om det er på en hverdag eller i weekenden, du ønsker at booke lokalet, betyder ikke noget. Du skriver bare en mail til aa-cafe@loeves.dk med dine ønsker og så stykker vi din begivenhed sammen efter dine behov.<br>
					<br> Lokalerne kan bookes fra mandag til fredag i tidsrummet 9-24, lørdag 10-24 samt om søndagen fra 10-18.
				</p>
				<a href="kontakt.php">
					<p class="btn-custom btn">Kontakt os</p>
				</a>
			</div>
		</div>

	</div>
</div>
<footer>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356.7182407058315!2d10.208964280464548!3d56.16011587699538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cc152da79721183!2sVincaf%C3%A9en!5e0!3m2!1sda!2sdk!4v1494667091584" width="100%" height="420" class="" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php include( 'footer.php' )?>