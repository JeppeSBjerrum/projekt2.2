<?php

$pagetitle = 'Vincaféen';

$pagelogo = 'images/vincafelogohvidskygge.png';

include( "header.php" );

?>

<!--Stor video-->

<div id="vinvideo" class="storvideo">

	<video loop autoplay>

		<source src="video/vincafe.mp4" type="video/mp4">

	</video>

	<audio autoplay loop id="music">

		<source src="audio/bensound-love.mp3" type="audio/mpeg">

	</audio>

</div>

<!--ØVERSTE TEKSTKASSE MED PAPIRBAGGRUND-->

<div class="velkomstkasse">

	<div class="container">

		<div class="row">
			<div class="col-xs-12 text-center velkommen1"><h1>Velkommen til Vincaféen</h1>
			<h2>- Nyd vin fra hele verdenen!</h2></div>
			</div>
<div class="row velkommen2">
			
			<div class="col-sm-4 abningstider">
				<h3>Åbningstider</h3>
				<table width="100%">
					<tbody>
						<tr>
							<td>Mandag:</td>
							<td>Lukket</td>
						</tr>
						<tr>
							<td>Tirsdag:</td>
							<td>16:00 - 22:00</td>
						</tr>
						<tr>
							<td>Onsdag:</td>
							<td>16:00 - 22:00</td>
						</tr>
						<tr>
							<td>Torsdag:</td>
							<td>16:00 - 24:00</td>
						</tr>
						<tr>
							<td>Fredag:</td>
							<td>15:00 - 24:00</td>
						</tr>
						<tr>
							<td>lørdag:</td>
							<td>15:00 - 24:00</td>
						</tr>
						<tr>
							<td>Søndag</td>
							<td>Lukket</td>
						</tr>
					</tbody>
				</table>

			</div>
			
			<div class="col-sm-4 hvemervi hidden-xs">
				<h3>Hvem er vi</h3>
				<p>Vincaféen er stedet, hvor vinhandel og café får sit helt eget udtryk i hyggelige, rustikke og levende omgivelser. <br>
<br>
Vores fokus ligger på selvimporterede kvalitetsvine til gode priser, som enten kan nydes i caféen eller tages med hjem til favorable priser.<br>
</p>
			</div>
			<div class="col-sm-4 hvemervi hidden-xs">
				<h3>Om Løve's</h3>
				<p>Løve's blev etableret i Århus i 2008, men stammer egentligt helt tilbage fra 2004, hvor idéerne først opstod hos grundlæggeren. <br>
<br>
Navnet Løve's kommer som inspiration fra Brødrene Løvehjerte, der brændte sig ind i hjertet på et dreng tilbage i 80'erne.</p>
			</div>
		</div>

	</div>

</div>

<!--MENU AFSNIT-->

<!--CAROUSEL MED FORSKELLIGE VINE-->

<div class="tavle">

	<div class="container">

		<div class="row">

			<div class="col-sm-5 menucarousel">

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

							<img src="images/vin1.jpg" alt="" style="width:100%;">

							<div class="carousel-caption boks">

								<p>
								Rødvin:<br>
Rosado ”Selección”, 2015(tempranillo) <br>
<br>
Bodegas Lambuena, Ribera del Duero, Castilla y Léon, Frankrig </p>

							</div>

						</div>

						<div class="item">

							<img src="images/vin2.jpg" alt="" style="width:100%;">

							<div class="carousel-caption boks">

								<p>Hvidvin:<br>

								Nunci Blanc, 2013(garnacha blanca & macabeo) <br>
<br>Nunci, Priorat, Catalonien, Spanien
</p>

							</div>

						</div>

						<div class="item">

							<img src="images/vin3.jpg" alt="" style="width:100%;">

							<div class="carousel-caption boks">

								<p>Kom forbi og hør om de over 200 andre vine, som vi har i vores sortiment!</p>

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

			<!--SELVE MENUKORTET-->

			<div class="col-sm-7" id="menu">

				<div class="row menukortknapper">

					<h4 class="col-xs-12 col-sm-12 col-md-3 btn-custom" onClick="vvinkort()">Vinkort</h4>

					<h4 class="col-xs-12 col-sm-4 col-md-3 btn-custom" onClick="vlordagsmad()">Lørdagsmad</h4>

					<h4 class="col-xs-12 col-sm-4 col-md-3 btn-custom" onClick="vdrikke()">Drikke</h4>

					<h4 class="col-xs-12 col-sm-4 col-md-3 btn-custom" onClick="vmad()">Mad</h4>

				</div>

				<div id="menuindhold" class="col-xs-12">

					<h3 class="col-xs-12">Vinkort</h3>

					<p class="col-xs-12">Vi har pt. 217 forskellige vine, som alle sælges både per glas og flaske.<br><br><br> 
					
					<a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin på flaske</a><br>
<br>

					<a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin på glas</a><br>
<br>

					<a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin ud af huset</a>
					<img src="images/loevesgamlelogo.png" alt="" width="150px" class="pull-right">

					</p>

				</div>

			</div>

		</div>

	</div>

</div>

<!--AFSNIT MED PRICAT VINSMAGNING-->

<div id="smagningid">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 boks smagning">

				<h2>Privat vinsmagning</h2>

				<p>Hvis du mangler et sted at holde din fest, fødselsdag, reception, polterabend, konfirmation eller andet selskabelighed, så har vi lokalerne til dig. I hyggelige og rustikke omgivelser tilbyder vi ikke blot et lokale med plads til mere end 30 personer, men også en velrustet bar, et godt køkken og ikke mindst søde vintjenere.

					<br> Lokalerne kan bookes fra mandag til fredag i tidsrummet 9-24, lørdag 10-24 samt om søndagen fra 10-18.<br>

Kontakt os blot med dine ønsker og så stykker vi din begivenhed sammen efter dine behov.<br>
<br>


				</p>

				<a href="kontakt.php">

					<p class="btn-custom btn">Kontakt os</p>

				</a>

			</div>

		</div>

	</div>

</div>

<footer>



		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356.7182407058315!2d10.208964280464548!3d56.16011587699538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cc152da79721183!2sVincaf%C3%A9en!5e0!3m2!1sda!2sdk!4v1494667091584" width="100%" height="420" class="" frameborder="0" style="border:0" allowfullscreen></iframe> -->

		

<!-- div hvor maps bliver loadet -->

		<div id="map"></div>

		

		<!-- Google maps -->

		<script>

			//zoom difinere hvor mange map tiles der bliver vist; 1: World, 5: Landmass/continent, 10: City, 15: Streets, 20: Buildings

			function initMap() {

				//loeves vincafe position

				var loevesvin = {lat: 56.160145, lng: 10.208897};

				var map = new google.maps.Map( document.getElementById( 'map' ), {

					center: loevesvin,

          			scrollwheel: false,

					zoom: 15,

					styles: [

  /* Maps styling, brugt www.mapstyle.withgoogle.com */

						{

							/* generelt landmasse styling af farve */

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#212121"

      }

    ]

  },

  {

	  /* Fjerne ikoner på kortet */

    "elementType": "labels.icon",

    "stylers": [

      {

        "visibility": "off"

      }

    ]

  },

  {

	  /* generel tekst farver */

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#757575"

      }

    ]

  },

  {

	  /* generelt tekst farve outline (hænger sammen med den ovenover) */

    "elementType": "labels.text.stroke",

    "stylers": [

      {

        "color": "#212121"

      }

    ]

  },

  {

	  /* Ved lang udzooming, farver landgrænserne */

    "featureType": "administrative",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#757575"

      }

    ]

  },

  {

	  /* farver landes navne tekst en lysere grå end den generelle tekst farve */

    "featureType": "administrative.country",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#9e9e9e"

      }

    ]

  },

  {

	  /* ændre navne på byer og område navne til en lysere grå */

    "featureType": "administrative.locality",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#bdbdbd"

      }

    ]

  },

  {

	  /* Ændre farven på 'points of intereset' til en lysere grå, som Ø-Haven i Aarhus */

    "featureType": "poi",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#757575"

      }

    ]

  },

  {

	  /* ændre parkarealer til en mørkere grå */

    "featureType": "poi.park",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#181818"

      }

    ]

  },

  {

	  /* Ændre parkers navne til en lysere grå */

    "featureType": "poi.park",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#616161"

      }

    ]

  },

  {

	  /* Ændre outlinen på park navne til en mørkere grå */

    "featureType": "poi.park",

    "elementType": "labels.text.stroke",

    "stylers": [

      {

        "color": "#1b1b1b"

      }

    ]

  },

  {

	  /* Generelle vejes farve */

    "featureType": "road",

    "elementType": "geometry.fill",

    "stylers": [

      {

        "color": "#2c2c2c"

      }

    ]

  },

  {

	  /* Vej navnes farve */

    "featureType": "road",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#8a8a8a"

      }

    ]

  },

  {

	  /* Ændre stører by veje til hjemmesiden bordeaux vin farve */

    "featureType": "road.arterial",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#700a29"

      }

    ]

  },

  {

	  /* Ændre highways til hjemmesiden bordeaux vin farve */

    "featureType": "road.highway",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#700a29"

      }

    ]

  },

  {

	  /* Ændre highways til hjemmesiden bordeaux vin farve */

    "featureType": "road.highway.controlled_access",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#700a29"

      }

    ]

  },

  {

	  /* Ændre lokale små vejes navne til en lysere grå */

    "featureType": "road.local",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#616161"

      }

    ]

  },

  {

	  /* ændre transit tekst farven til en lysere grå */

    "featureType": "transit",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#757575"

      }

    ]

  },

  {

	  /* ændre farven på vand til sort */

    "featureType": "water",

    "elementType": "geometry",

    "stylers": [

      {

        "color": "#000000"

      }

    ]

  },

  {

	  /* ændre tekst på vand til en mørkere grå en den generelle tekst farve */

    "featureType": "water",

    "elementType": "labels.text.fill",

    "stylers": [

      {

        "color": "#3d3d3d"

      }

    ]

  }

]

				} );

				// positions marker

				var marker = new google.maps.Marker({

          		position: loevesvin,

          		map: map

        });

			}

		</script>

		<!-- Loader Google Maps JavaScript API -->

	<!-- Vores key: AIzaSyDuHRGxzOlsw2TgdeiMyXIR064GLayCX9U -->

	<!-- async gør at siden loader videre, når API'en er klar udfører den callback funtionen -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuHRGxzOlsw2TgdeiMyXIR064GLayCX9U&callback=initMap" async defer></script>

	<?php include( 'footer.php' )?>
	