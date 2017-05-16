// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen :hover over elementet
$('#bogeventscarousel').hover(function(){
   $("#bogeventscarousel").carousel('pause');
},function(){
   $("#bogeventscarousel").carousel('cycle');
});

		//js for baggrundsmusik og knapperne i nav
		var aud = document.getElementById("music");

		function playAudio() {
			aud.play();
		}

		function pauseAudio() {
			aud.pause();
		};

//MENUKORT PÅ VINCAFESIDEN
//variabler for indholdet på menuen
var vinvinkortet = '<h4>Varmt</h4><table class="col-sm-6">  <tbody>    <tr>     <td>Espresso</td>      <td>20,- </td>    </tr>    <tr>      <td>Café con leche</td>      <td>30,- </td>    </tr>    <tr><td>Valgfri to-go kaffe</td>      <td>25,- </td>    </tr>  </tbody></table>	 <table  class="col-sm-6">    <tbody>  <tr>      <td>Americano</td>      <td>25,- </td>    </tr>    <tr>      <td>Ekstra skud espresso</td>      <td>5,- </td>    </tr>    <tr>      <td>Te (sort eller grøn)</td>      <td>25,- </td>    </tr>  </tbody></table><h4>Varmt</h4><table class="col-sm-6">  <tbody>    <tr>      <td>Sodavand</td>      <td>28,-</td>    </tr>    <tr>      <td>Øko safter</td>      <td>32,-</td>    </tr>    <tr>      <td>Spiritus (3cl)</td>      <td>50,-</td>    </tr></tbody></table>	  <table class="col-sm-6">    <tbody>    <tr>      <td>Spiritus (6cl)</td>      <td>75,-</td>    </tr>    <tr>      <td>Flaskeøl: Black Lager - Thy øko Humle - Ale No. 16</td>      <td>35,-</td>    </tr>  </tbody></table><br><a href="pdfnavn" target="_blank">Hent en pdf af menukortet</a>';
var vinlordagsmad = "øh";
var vindrikke = "";
var vinmad = "";


function vvinkort(){
	document.getElementById("menuindhold").innerHTML = vinvinkortet ;
};
function vlordagsmad(){
	document.getElementById("menuindhold").innerHTML = vinlordagsmad ;
};
function vdrikke(){
	document.getElementById("menuindhold").innerHTML = vindrikke ;
};
function vmad(){
	document.getElementById("menuindhold").innerHTML = vinmad;
};

