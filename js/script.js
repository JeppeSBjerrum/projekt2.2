// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen :hover over elementet
$('#bogeventscarousel').hover(function () {
	$("#bogeventscarousel").carousel('pause');
}, function () {
	$("#bogeventscarousel").carousel('cycle');
});

//JS for knapper til baggrundsmusikken
var aud = document.getElementById("music");

function playAudio() {
	aud.play();
}

function pauseAudio() {
	aud.pause();
};

//JS FOR MENUKORT
//variabler for indholdet på menuen
//VINCAFÉ UNDERSIDEN
//Menupunkt: Vinkort
var vinvinkortet = '<h4 class="col-xs-12">Vinkort</h4><p class="col-xs-12">For os er det vigtigt, at vores gæster har mulighed for at smage en masse forskelligt, så vi har valgt ikke at have faste vine på glas, men derimod åbne forskellige flasker alt efter udbuddet. På denne måde kan vi hver dag tilbyde nye vine på glas, samt give dem, der vil købe vin med hjem, mulighed for at smage, før de køber. <br><br>Priserne på vin ud af huset er naturligvis billigere end vine, der nydes i caféen, men uanset om du nyder vin hos os eller derhjemme, så er der altid gode priser. Og hvis man køber flere vine med hjem, er der selvfølgelig også mulighed for at få rabat, ligesom glasprisen på vine, der nydes i caféen, er ¼ af flaskeprisen, hvilket betyder, at man får det 5. glas gratis, når man køber en flaske. <br><br><br> <a href="pdfnavn" target="_blank" class="btn-custom">Hent en pdf-fil af vores vinkort</a><img src="images/loevesgamlelogo.png" alt="" width="150px" class="pull-right"></p>';
//Menupunkt: Lørdagsmad
var vinlordagsmad = '<h4>Lørdagsmad på Vincaféen</h4><p>8. april: And med citronmelisse, jordskokker og løg<br><br>22. april: Okse med persille, persillerod og svampe<br><br>6. maj: Kylling med asparges og spinat<br><br>20. maj: Lam med blomkål, gulerødder og salvie<br><br>3. juni: Kalv med ærter, løg og spidskål</p><br><p><strong>Bordbestilling</strong> sker i Vincaféen eller på vincafeen@loeves.dk<br>Efter først-til-mølle princip</p>';
//Menupunkt: Drikke
var vindrikke = '<h4 class="col-xs-12">Varmt</h4><div class="col-sm-6"><table width="100%"><tbody><tr><td>Espresso</td><td>20,-</td></tr><tr><td>Café con leche</td><td>30,-</td></tr><tr><td>Valgfri to-go kaffe</td><td>25,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Americano</td><td>25,-</td></tr><tr><td>Ekstra skud espresso</td><td>5,-</td></tr><tr><td>Te (sort eller grøn)</td><td>25,-</td></tr></tbody></table></div><br><br><br><h4 class="col-xs-12">Koldt</h4><div class="col-sm-6"><table width="100%"><tbody><tr><td>Sodavand</td><td>28,-</td></tr><tr><td>Øko safter</td><td>32,-</td></tr><tr><td>Spiritus (3cl)</td><td>50,-</td></tr><tr><td>Spiritus (6cl)</td><td>75,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Flaskeøl:<br>- Black Lager<br>- Thy øko Humle<br>- Ale No. 16</td><td>35,-</td></tr></tbody></table></div><br>';
//Menupunkt: Mad
var vinmad = '<h4 class="col-xs-12">Vores madudvalg</h4><div class="col-sm-6"><table width="100%"><tbody><tr><td>Ostetallerken (den lille)</td><td>75,-</td></tr><tr><td>Ostetallerken (den store)</td><td>120,-</td></tr><tr><td>Charcuteri (den lille)</td><td>75,-</td></tr><tr><td>Charcuteri (den store)</td><td>120,-</td></tr><tr><td>Blandet tallerken (den lille)</td><td>75,-</td></tr><tr><td>Blandet tallerken (den store)</td><td>120,-</td></tr><tr><th class="text-left"><br>Kage</th></tr><tr><td>Hjemmelavet brownie</td><td>35,-</td></tr></tbody></table></div><p class="col-sm-6">Alle madbestillinger serveres  med hjemmelavet brød,tapanade, olie & salt og kan også købes til at tage med.</p>';

//BOG OG VINCAFÉ UNDERSIDEN
//Menupunkt: 

//FUNKTIONER DER INDSÆTTER VARIABLERNE I ID=MENUINDHOLD
//VINCAFE UNDERSIDEN

//Menupunkt: Vinkort
function vvinkort() {
	document.getElementById("menuindhold").innerHTML = vinvinkortet;
};
//Menupunkt: Lørdagsmad
function vlordagsmad() {
	document.getElementById("menuindhold").innerHTML = vinlordagsmad;
};
//Menupunkt: Drikke
function vdrikke() {
	document.getElementById("menuindhold").innerHTML = vindrikke;
};
//Menupunkt: Mad
function vmad() {
	document.getElementById("menuindhold").innerHTML = vinmad;
};

//BOG OG VINCAFE UNDERSIDE

function bvinkort() {
	document.getElementById("menuindhold").innerHTML = vinvinkortet;
};
//Menupunkt: Lørdagsmad
function blordagsmad() {
	document.getElementById("menuindhold").innerHTML = vinlordagsmad;
};
//Menupunkt: Drikke
function bdrikke() {
	document.getElementById("menuindhold").innerHTML = vindrikke;
};
//Menupunkt: Mad
function bmad() {
	document.getElementById("menuindhold").innerHTML = vinmad;
};