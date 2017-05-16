// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen :hover over elementet
$('#bogeventscarousel').hover(function () {
	$("#bogeventscarousel").carousel('pause');
}, function () {
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
var vinvinkortet = 'For os er det vigtigt, at vores gæster har mulighed for at smage en masse forskelligt, så vi har valgt ikke at have faste vine på glas, men derimod åbne forskellige flasker alt efter udbuddet. På denne måde kan vi hver dag tilbyde nye vine på glas, samt give dem, der vil købe vin med hjem, mulighed for at smage, før de køber. <br><br>Priserne på vin ud af huset er naturligvis billigere end vine, der nydes i caféen, men uanset om du nyder vin hos os eller derhjemme, så er der altid gode priser. Og hvis man køber flere vine med hjem, er der selvfølgelig også mulighed for at få rabat, ligesom glasprisen på vine, der nydes i caféen, er ¼ af flaskeprisen, hvilket betyder, at man får det 5. glas gratis, når man køber en flaske. <br><br> <a href="pdfnavn" target="_blank">Hent en pdf af menukortet</a>';
var vinlordagsmad = '';
var vindrikke = '<h4>Varmt</h4><table class="col-sm-6">  <tbody>    <tr>     <td>Espresso</td>      <td>20,- </td>    </tr>    <tr>      <td>Café con leche</td>      <td>30,- </td>    </tr>    <tr><td>Valgfri to-go kaffe</td>      <td>25,- </td>    </tr>  </tbody></table>	 <table  class="col-sm-6">    <tbody>  <tr>      <td>Americano</td>      <td>25,- </td>    </tr>    <tr>      <td>Ekstra skud espresso</td>      <td>5,- </td>    </tr>    <tr>      <td>Te (sort eller grøn)</td>      <td>25,- </td>    </tr>  </tbody></table><h4>Koldt</h4><table class="col-sm-6">  <tbody>    <tr>      <td>Sodavand</td>      <td>28,-</td>    </tr>    <tr>      <td>Øko safter</td>      <td>32,-</td>    </tr>    <tr>      <td>Spiritus (3cl)</td>      <td>50,-</td>    </tr></tbody></table>	  <table class="col-sm-6">    <tbody>    <tr>      <td>Spiritus (6cl)</td>      <td>75,-</td>    </tr>    <tr>      <td>Flaskeøl: Black Lager - Thy øko Humle - Ale No. 16</td>      <td>35,-</td>    </tr>  </tbody></table><br>';
var vinmad = '<table class="col-sm-6">  <tbody>    <tr>      <td>Ostetallerken (den lille)</td>      <td>75,-</td>    </tr>    <tr>      <td>Ostetallerken (den store)</td>      <td>120,-</td>    </tr>    <tr>      <td>Charcuteri (den lille)</td>      <td>75,-</td>    </tr>    <tr>      <td>Charcuteri (den store)</td>      <td>120,-</td></tr>    <tr>      <td>Blandet tallerken (den lille)</td>      <td>75,-</td>    </tr>    <tr>      <td>Blandet tallerken (den store)</td>      <td>120,-</td>    </tr>    <tr>     <th class="text-left">wut</th></tr>    <tr>      <td>Hjemmelavet brownie</td>      <td>35,-</td>    </tr></tbody></table><p class="col-sm-6">Alle madbestillinger serveres  med hjemmelavet brød,tapanade, olie & salt og kan også købes til at tage med.</p>';


function vvinkort() {
	document.getElementById("menuindhold").innerHTML = vinvinkortet;
};

function vlordagsmad() {
	document.getElementById("menuindhold").innerHTML = vinlordagsmad;
};

function vdrikke() {
	document.getElementById("menuindhold").innerHTML = vindrikke;
};

function vmad() {
	document.getElementById("menuindhold").innerHTML = vinmad;
};
