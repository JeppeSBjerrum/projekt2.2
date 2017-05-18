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
			<div class="col-xs-12 text-center velkommen1"><h1>Velkommen til Løve's Bog- og Vincafé</h1>
			<h2>- Bare bliv siddende!</h2></div>
			</div>
<div class="row velkommen2">
			
			<div class="col-sm-4 abningstider">
				<h3>Åbningstider</h3>
				<table width="100%">
					<tbody>
						<tr>
							<td>Mandag:</td>
							<td>9:00 - 24:00</td>
						</tr>
						<tr>
							<td>Tirsdag:</td>
							<td>9:00 - 24:00</td>
						</tr>
						<tr>
							<td>Onsdag:</td>
							<td>9:00 - 24:00</td>
						</tr>
						<tr>
							<td>Torsdag:</td>
							<td>9:00 - 24:00</td>
						</tr>
						<tr>
							<td>Fredag:</td>
							<td>9:00 - 24:00</td>
						</tr>
						<tr>
							<td>lørdag:</td>
							<td>10:00 - 24:00</td>
						</tr>
						<tr>
							<td>Søndag</td>
							<td>10:00 - 18:00</td>
						</tr>
					</tbody>
				</table>

			</div>
			
			<div class="col-sm-4 hvemervi">
				<h3>Hvem er vi</h3>
				<p>Løve's Bog- og VinCafé er stedet, hvor litteratur, mad og vin hænger uløseligt sammen, og hvor kulturen er levende.<br>


Vi er både en boghandel, der sælger nye bøger, en café med mad og drikke, en vinbar, der har mere end 130 forskellige, egen importerede vine fra hele Europa, og et kultursted med masser livearrangementer i form af koncerter, oplæsning, foredrag og poesievents.<br><br>



Så hvad enten du mangler en bog, en bid mad, et glas vin eller bare har lyst til at komme ud, så kig forbi Nørregade 32. </p>
			</div>
			<div class="col-sm-4 hvemervi">
				<h3>Om Løve's</h3>
				<p></p>
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
		<li data-target="#bogeventscarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/IMG_0920.jpg" class="hidden-xs" alt="">
			<img src="images/kauselmobil2.jpg" class="hidden-sm hidden-md hidden-lg" alt="">
			<div class="carousel-caption boks">
				<h3>Løve's Bogklub</h3>
				<h4>Hver 2. tirsdag i hver måned klokken 19</h4>
				<p class="hidden-xs">
					Et uforpligtende forum, hvor vi samles om litteratur og vender nogle af de tanker, bøger skaber under og efter læsningen.
					<br> Valget af bøger foretages i fællesskab og kan købes i bogcafeen. Du kan tilmelde dig til BogKlubben ved at skrive en mail til aa-cafe@loeves.dk med dit navn og emailadresse eller komme ned i bogcafeen og blive skrevet op.</p>
				<p class="hidden-sm hidden-md hidden-lg">En meget meget kort beskrivelse af eventet kunne stå her?</p>
			</div>
		</div>

		<div class="item">
			<img src="images/IMG_0933.jpg" class="hidden-xs" alt="">
			<img src="images/kauselmobil3.jpg" class="hidden-sm hidden-md hidden-lg" alt="">
			<div class="carousel-caption boks">
				<h3>Åben Poetisk Scene</h3>
				<h4>Hver 2. og 4. onsdag i måneden fra kl. 19.30-22.30</h4>
				<p class="hidden-xs">Åben Poetisk Scene er som navnet antyder, en åben scene hvor kreative ordgøglere, kvistværelsesspoeter - eller kort sagt: skrivende af alle slags! - kan komme og prøve deres ting af - få dem ud over scenen, op fra skrivebordsskuffen og fremført for et publikum. Og nysgerrige kan komme og få sig en god oplevelse som publikum.
					<br>
					<br> Åben Poetisk Scene arrangeres af Poetklub Århus og har kørt i mange år forskellige steder i Århus, men har nu fundet et fast sted i Løve's Bog- og VinCafé, der i forvejen står for flere litterære og kulturelle arrangementer; det samme gør Poetklub Århus jo - så på den måde er det et godt match.</p>
			</div>
		</div>

		<div class="item">
			<img src="images/carouselbillede1.JPG" class="hidden-xs" alt="">
			<img src="images/kauselmobil4.jpg" class="hidden-sm hidden-md hidden-lg" alt="">
			<div class="carousel-caption boks">
				<h3>Y Aarhus Poetry Club</h3>
				<h4>Den 3. onsdag i måneden kl. 19:30</h4>
				<p class="hidden-xs">Y Aarhus Poetry Club er en klub for poeter og musikere og historiefortællere, dansere og mange andre poetiske folk.<br> Klubben, som er en søster-klub til Y Tuesday Poetry Club i London, har eksisteret i 3 år på mange forskellige scener i Aarhus' underverden, men nu har den fundet sit eget tilholds sted på Løve's Bog- og VinCafé.<br>
					<br> Kom og læs dine digte op eller spil en sang!<br> Kunstnere, musikanter, poeter og danserinder kommer langvejs fra for at optræde på vores scene - men der er osse en plads til dig på scenen! </p>
			</div>
		</div>
		<div class="item">
			<img src="images/vinreol.jpg" class="hidden-xs" alt="">
			<img src="images/kauselmobil.jpg" class="hidden-sm hidden-md hidden-lg" alt="">
			<div class="carousel-caption boks">
				<h3>Vinsmagning</h3>
				<h4>Åben vinsmagning 1.lørdag hver måned kl. 15-17, <br>  5 forskellige vine 75 kr.</h4>
				<p class="hidden-xs">Hver lørdag åbner vi 5 vine op som du kan smage, for kun 75 kroner. Smag, bedøm og måske lær en smule omkring forskellige vine og druer. <br><br> Ellers bestil en privat vinsmagning. Smagningen koster 250 kr. pr. person (min. 8 personer) og varer 2-3 timer, hvor I bare skal læne jer tilbage og få en masse at vide om vin, mens I nyder 7-8 forskellige vine.</p>

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

			<div class="col-sm-5 bogmenuimg">
				<img src="images/20170503_120644.jpg" alt="" width="100%">

			</div>

			<div class="col-sm-7" id="menu">
				<div class="row menukortknapper">
					<h4 class="col-xs-6 col-sm-3 btn-custom" onclick="bdrikke()">Drikke</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom" onclick="balkohol()">Alkohol</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom" onclick="bmad()">Mad</h4>
					<h4 class="col-xs-6 col-sm-3 btn-custom" onclick="vvinkort()">Vinkort</h4>
				</div>
				<div id="menuindhold">
					<h3 class="col-xs-12">Varmt</h3>
					<div class="col-sm-6">
						<table width="100%">
							<tbody>
								<tr>
									<td>Espresso</td>
									<td>20,-</td>
								</tr>
								<tr>
									<td>Cortado</td>
									<td>27,-</td>
								</tr>
								<tr>
									<td>Cappuccino</td>
									<td>30,-</td>
								</tr>
								<tr>
									<td>Latte</td>
									<td>35/45,-</td>
								</tr>
								<tr>
									<td>Te</td>
									<td>25,-</td>
								</tr>
								<tr>
									<td>Chai latte</td>
									<td>40,-</td>
								</tr>
								<tr>
									<td>Iskaffe</td>
									<td>35/55,-</td>
								</tr>
								<tr>
									<td>Sodavand</td>
									<td>28,-</td>
								</tr>
								<tr>
									<td>Ekstra skud espresso</td>
									<td>5,-</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6">
						<table width="100%">
							<tbody>
								<tr>
									<td>Americano</td>
									<td>25,-</td>
								</tr>
								<tr>
									<td>Cafe au Lait</td>
									<td>30,-</td>
								</tr>
								<tr>
									<td>Caffe mokka</td>
									<td>35,-</td>
								</tr>
								<tr>
									<td>Stempelkande</td>
									<td>40/65,-</td>
								</tr>
								<tr>
									<td>Kande te</td>
									<td>55,-</td>
								</tr>
								<tr>
									<td>Chokolade</td>
									<td>33,-</td>
								</tr>
								<tr>
									<td>Øko safter</td>
									<td>32/38,- </td>
								</tr>
								<tr>
									<td>Valgfri to-go kaffe</td>
									<td>25,-</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!--FOOTER-->
<footer>
	<!-- div hvor maps bliver loadet -->
	<div id="map"></div>

	<!-- Google maps -->
	<script>
		//zoom difinere hvor mange map tiles der bliver vist; 1: World, 5: Landmass/continent, 10: City, 15: Streets, 20: Buildings
		function initMap() {
			//loeves vincafe position
			var loevesbog = {
				lat: 56.160832,
				lng: 10.209263
			};
			var map = new google.maps.Map( document.getElementById( 'map' ), {
				center: loevesbog,
				scrollwheel: false,
				zoom: 15,
				styles: [
					/* Maps styling, brugt www.mapstyle.withgoogle.com */
					{
						/* generelt landmasse styling af farve */
						"elementType": "geometry",
						"stylers": [ {
							"color": "#212121"
						} ]
					}, {
						/* Fjerne ikoner på kortet */
						"elementType": "labels.icon",
						"stylers": [ {
							"visibility": "off"
						} ]
					}, {
						/* generel tekst farver */
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#757575"
						} ]
					}, {
						/* generelt tekst farve outline (hænger sammen med den ovenover) */
						"elementType": "labels.text.stroke",
						"stylers": [ {
							"color": "#212121"
						} ]
					}, {
						/* Ved lang udzooming, farver landgrænserne */
						"featureType": "administrative",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#757575"
						} ]
					}, {
						/* farver landes navne tekst en lysere grå end den generelle tekst farve */
						"featureType": "administrative.country",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#9e9e9e"
						} ]
					}, {
						/* ændre navne på byer og område navne til en lysere grå */
						"featureType": "administrative.locality",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#bdbdbd"
						} ]
					}, {
						/* Ændre farven på 'points of intereset' til en lysere grå, som Ø-Haven i Aarhus */
						"featureType": "poi",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#757575"
						} ]
					}, {
						/* ændre parkarealer til en mørkere grå */
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#181818"
						} ]
					}, {
						/* Ændre parkers navne til en lysere grå */
						"featureType": "poi.park",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#616161"
						} ]
					}, {
						/* Ændre outlinen på park navne til en mørkere grå */
						"featureType": "poi.park",
						"elementType": "labels.text.stroke",
						"stylers": [ {
							"color": "#1b1b1b"
						} ]
					}, {
						/* Generelle vejes farve */
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers": [ {
							"color": "#2c2c2c"
						} ]
					}, {
						/* Vej navnes farve */
						"featureType": "road",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#8a8a8a"
						} ]
					}, {
						/* Ændre stører by veje til hjemmesiden bordeaux vin farve */
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#700a29"
						} ]
					}, {
						/* Ændre highways til hjemmesiden bordeaux vin farve */
						"featureType": "road.highway",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#700a29"
						} ]
					}, {
						/* Ændre highways til hjemmesiden bordeaux vin farve */
						"featureType": "road.highway.controlled_access",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#700a29"
						} ]
					}, {
						/* Ændre lokale små vejes navne til en lysere grå */
						"featureType": "road.local",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#616161"
						} ]
					}, {
						/* ændre transit tekst farven til en lysere grå */
						"featureType": "transit",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#757575"
						} ]
					}, {
						/* ændre farven på vand til sort */
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [ {
							"color": "#000000"
						} ]
					}, {
						/* ændre tekst på vand til en mørkere grå en den generelle tekst farve */
						"featureType": "water",
						"elementType": "labels.text.fill",
						"stylers": [ {
							"color": "#3d3d3d"
						} ]
					}
				]
			} );

			// positions marker
			var marker = new google.maps.Marker( {
				position: loevesbog,
				map: map
			} );
		}
	</script>
	<!-- Loader Google Maps JavaScript API -->
	<!-- Vores key: AIzaSyDuHRGxzOlsw2TgdeiMyXIR064GLayCX9U -->
	<!-- async gør at siden loader videre, når API'en er klar udfører den callback funtionen -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuHRGxzOlsw2TgdeiMyXIR064GLayCX9U&callback=initMap" async defer></script>


	<?php include( 'footer.php' )?>