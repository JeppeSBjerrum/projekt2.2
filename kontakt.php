<?php
$pagetitle = 'Kontakt Løve´s';
$pagelogo = 'images/loeveslogohvidskygge.png';
include( "header.php" )
?>
<!--STORT BILLEDE ISTEDET FOR EN VIDEO-->
<div class="navbillede"></div>
<!--ØVERSTE TEKSTKASSE MED PAPIRBAGGRUND-->
<div class="velkomstkasse">
	<div class="container">
		<div class="row">


		</div>
		<div class="row kontaktspalte">
<div class="col-xs-12 text-center velkommen1"><h1>Kontakt os</h1>
			<h2>Bordreservation, arrangementer, andre spørgsmål?</h2></div>s

			<div class="col-sm-6 kontaktformular">
				
				<form method="post" action="http://www.jungild.dk/cgi-bin/FormMail.pl" accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; 
document.charset = 'ISO-8859-1'; 
window.onbeforeunload = function () {document.charset=originalCharset;};">

					<div class="form-group">
						<label for="form_name">Navn *</label>

						<input name="realname"/>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label for="form_email">Email *</label>

						<input name="email"/>
						<div class="help-block with-errors"></div>
					</div>

					<div class="form-group">
						<label for="form_message">Din besked *</label><br>

						<textarea cols="40" rows="10" name="Message"></textarea>
						<div class="help-block with-errors"></div>
					</div>



					<input type="submit" class="btn-custom2" value="Send"/>
					<input type="hidden" name="recipient" value="kim@jungild.dk"/>
					<input type="hidden" name="subject" value="Subject"/>
					<input type="hidden" name="redirect" value="http://www.jungild.dk/"/>
					<input type="hidden" name="missing_fields_redirect" value="http://www.jungild.dk/loeves/index.html"/>

					<input type="hidden" name="required" value="realname,email,message"/>
				</form>
			</div>
			
			<div class="col-sm-3 kontaktrow">
					<img src="images/bogcafelogosort.png" alt=""><br>
					<br>
				


				<p>Løve's Bog- og VinCafé<br> Nørregade 32<br> 8000 Århus C<br>
					<br> <a href="callto:+4527831633">27 83 16 33</a><br> <a href="mailto:aa-cafe@loeves.dk">aa-cafe@loeves.dk</a>

				</p><br>

				<p><strong>Åbningstider</strong> <br> Mandag-Fredag: 9-24 <br> Lørdag: 10-24 <br> Søndag: 10-18 </p>

				<br>
				<br>
			</div>
			
				<div class="col-sm-3 kontaktrow">
					<img src="images/vincafelogosort.png" alt=""><br>
					<br>
				

					<p> Vincaféen<br> Borggade 14<br> 8000 Århus C
						<br>
						<br> <a href="callto:+4552175016">52 17 50 16</a><br> <a href="mailto:vincafeen@loeves.dk">vincafeen@loeves.dk</a>

					</p><br>


					<p><strong>Åbningstider</strong> <br> Mandag: Lukket <br> Tirsdag: 16-22 <br> Onsdag: 16-22 <br> Torsdag: 16-24 <br> Fredag: 15-24 <br> Lørdag: 15-24 <br> Søndag: Lukket
					</p>

				</div>
		</div>
	</div>
</div>

<!--ANDRE STEDER INDENFOR LØVES-->

<div class="tavle">
	<div class="container">
		<div class="row mereloeves text-center">

			<h2>Løve's andre afdelinger</h2><br>
			<div class="col-sm-4 ">
				<img src="images/loeveslogohvid.png" alt="">
				<h3>Antikvariat</h3>
				<p>
					Løve's Antikvariat<br>Høegh-Guldbergs Gade 71<br>8000 Århus C<br><br><a href="callto:+4527831634">27 83 16 34</a><br><a href="mailto:aa-antik@loeves.dk">aa-antik@loeves.dk</a>
				</p>
			</div>
			<div class="col-sm-4">
				<img src="images/loeveslogohvid.png" alt="">
				<h3>Hotel Carmel</h3>
				<p>Hotel Carmel<br>Nørre Allé 23c/Klosterport 6<br> 8000 Århus C<br>
					<br><a href="callto:+4530547220">30 54 72 20</a><br><a href="mailto:info@hotelcarmel.dk">info@hotelcarmel.dk</a>

				</p>
			</div>
			<div class="col-sm-4">
				<img src="images/loeveslogohvid.png" alt="">
				<h3>Løve's Forlag</h3>
				<p>Løvens Forlag<br> Borggade 14<br> 8000 Århus C<br>
					<br> <a href="callto:+4530547220">30 54 72 20</a><br>
					<a href="mailto:info@loevensforlag.dk">info@loevensforlag.dk</a>

				</p>
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
			var loevesvin = {
				lat: 56.160145,
				lng: 10.208897
			};
			var map = new google.maps.Map( document.getElementById( 'map' ), {
				center: loevesvin,
				scrollwheel: false,
				zoom: 16,
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
				position: loevesvin,
				map: map
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

	<?php include( "footer.php" )?>