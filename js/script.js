// JavaScript Document

//Pauser Carousel på Bogcafesiden, når musen :hover over elementet
$('#bogeventscarousel').hover(function () {
	$("#bogeventscarousel").carousel('pause');
}, function () {
	$("#bogeventscarousel").carousel('cycle');
});

//JS for knapper til baggrundsmusikken
//sætter lydfil som variabel
var aud = document.getElementById("music");
//funktion der afspiller musikken
function playAudio() {
	aud.play();
}
//funktion der sætter musikken på pause
function pauseAudio() {
	aud.pause();
};



//JS FOR MENUKORT
//variabler for indholdet på menukortet
//VINCAFÉ UNDERSIDEN
//Menupunkt: Vinkort
var vinvinkortet = '<h3 class="col-xs-12">Vinkort</h3><p class="col-xs-12">Vi har pt. 217 forskellige vine, som alle sælges både per glas og flaske.<br><br><br> <a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin på flaske</a><br><br><a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin på glas</a><br><br><a href="vinkort.pdf" target="_blank" class="btn-custom btn">Vinkort: Vin ud af huset</a><img src="images/winebottle.png" alt="" width="150px" class="pull-right"></p>';
//Menupunkt: Lørdagsmad
var vinlordagsmad = '<h3>Lørdagsmad på Vincaféen</h3><p>8. april: And med citronmelisse, jordskokker og løg<br><br>22. april: Okse med persille, persillerod og svampe<br><br>6. maj: Kylling med asparges og spinat<br><br>20. maj: Lam med blomkål, gulerødder og salvie<br><br>3. juni: Kalv med ærter, løg og spidskål</p><br><p><strong>Bordbestilling</strong> sker i Vincaféen eller på vincafeen@loeves.dk<br>Efter først-til-mølle princip<img src="images/wine.png" alt="" width="200px" class="pull-right"></p>';
//Menupunkt: Drikke
var vindrikke = '<h3 class="col-xs-12">Varmt</h3><div class="col-sm-6"><table width="100%"><tbody><tr><td>Espresso</td><td>20,-</td></tr><tr><td>Café con leche</td><td>30,-</td></tr><tr><td>Valgfri to-go kaffe</td><td>25,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Americano</td><td>25,-</td></tr><tr><td>Ekstra skud espresso</td><td>5,-</td></tr><tr><td>Te (sort eller grøn)</td><td>25,-</td></tr></tbody></table></div><br><br><br><h3 class="col-xs-12">Koldt</h3><div class="col-sm-6"><table width="100%"><tbody><tr><td>Sodavand</td><td>28,-</td></tr><tr><td>Øko safter</td><td>32,-</td></tr><tr><td>Spiritus (3cl)</td><td>50,-</td></tr><tr><td>Spiritus (6cl)</td><td>75,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Flaskeøl:<br>- Black Lager<br>- Thy øko Humle<br>- Ale No. 16</td><td>35,-</td></tr></tbody></table></div><br>';
//Menupunkt: Mad
var vinmad = '<h3 class="col-xs-12">Vores madudvalg</h3><div class="col-sm-6"><table width="100%"><tbody><tr><td>Ostetallerken (den lille)</td><td>75,-</td></tr><tr><td>Ostetallerken (den store)</td><td>120,-</td></tr><tr><td>Charcuteri (den lille)</td><td>75,-</td></tr><tr><td>Charcuteri (den store)</td><td>120,-</td></tr><tr><td>Blandet tallerken (den lille)</td><td>75,-</td></tr><tr><td>Blandet tallerken (den store)</td><td>120,-</td></tr><tr><th class="text-left"><br>Kage</th></tr><tr><td>Hjemmelavet brownie</td><td>35,-</td></tr></tbody></table></div><p class="col-sm-6">Alle madbestillinger serveres  med hjemmelavet brød,tapanade, olie & salt og kan også købes til at tage med.<br><br><img src="images/cheese.png" alt="" width="90%" class="pull-right"></p>';


//BOG OG VINCAFÉ UNDERSIDEN
//Menupunkt: 
var bogvarmt = '<h3 class="col-xs-12">Varmt</h3><div class="col-sm-6"><table width="100%"><tbody><tr><td>Espresso</td><td>20,-</td></tr><tr><td>Cortado</td><td>27,-</td></tr><tr><td>Cappuccino</td><td>30,-</td></tr><tr><td>Latte</td><td>35/45,-</td></tr><tr><td>Te</td><td>25,-</td></tr><tr><td>Chai latte</td><td>40,-</td></tr><tr><td>Ekstra skud espresso</td><td>5,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Americano</td><td>25,-</td></tr><tr><td>Cafe au Lait</td>     <td>30,-</td> </tr><tr><td>Caffe mokka</td><td>35,-</td></tr>  <tr><td>Stempelkande</td><td>40/65,-</td></tr><tr><td>Kande te</td><td>55,-</td></tr><tr><td>Chokolade</td><td>33,-</td></tr><tr><td>Valgfri to-go kaffe</td><td>25,-</td></tr></tbody></table></div>';
//Menupunkt: 
var bogkoldt = '<h3 class="col-xs-12">Koldt</h3><div class="col-sm-6"><table width="100%">  <tbody><tr><td>Høker Bajer</td><td>30,-</td></tr><tr><td>Thy Øko Humle</td><td>35,- </td></tr><tr><td>Limfjordsporter</td><td>35,-</td></tr><tr><td>La Trappe Dubbel</td><td>45,-</td></tr><tr><td>Spiritus</td><td>50-70,-</td></tr><tr><td>Iskaffe</td><td>35/55,-</td></tr><tr><td>Sodavand</td><td>28,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody><tr><td>Black Lager</td><td>32,-</td></tr> <tr><td>Ale No. 16</td><td>35,- </td></tr><tr><td>La Trappe Witte</td><td>45,-</td></tr><tr><td>La Trappe Quadrupel</td> <td>50,-</td></tr><tr><td>Drinks</td><td>60-85,-</td></tr><tr><td>Øko safter</td><td>32/38,- </td></tr></tbody></table></div><img src="images/book.png" alt="" width="200px" class="pull-right">';
//Menupunkt: 
var bogmad = '<h3 class="col-xs-12">Mad</h3><div class="col-sm-6"><table width="100%">  <tbody><tr> <td>Hjemmelavet brød med smør, ost og marmelade (kl. 09-14)</td>  <td>30,-</td>  </tr>  <tr>     <td>Salat</td><td>70,- </td></tr><tr> <td>Sandwich</td><td>70,-</td> </tr><tr> <td>Ostetallerken</td><td>85,-</td></tr><tr>    <td>Aftensnack (kl. 21-24)</td><td>60,-</td></tr><tr>    <td>Hjemmelavet brownie</td><td>30/50,-</td></tr><tr>   <td>Hjemmelavet brownie inkl. kaffe</td> <td>50,-</td></tr></tbody></table></div><div class="col-sm-6"><table width="100%"><tbody>    <tr> <td>Hjemmelavet brød med smør, ost, marmelade + valgfri kaffe</td> <td>45,-</td></tr><tr><td>Snack tallerken</td>    <td>70,- </td></tr> <tr><td>Pølse / ost tallerken</td><td>85,-</td> </tr>    <tr><td>Tapas for 2, inkl. 1 flaske vin</td><td>325,-</td></tr><tr><td>Peanuts/oliven/mandler</td><td>25,-</td></tr><tr>   <td>Croissant (alm. / chokolade)</td> <td>20,-</td></tr></tbody></table></div>';
//Menupunkt: 



//FUNKTIONER DER INDSÆTTER VARIABLERNE I ID=MENUINDHOLD
//VINCAFE UNDERSIDEN
//Menupunkt: Vinkort OG for vinkort på undersiden for Bog og vincafé
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
//BOG OG VINCAFE UNDERSIDEN
//Menupunkt: Varmt
function bvarmt() {
	document.getElementById("menuindhold").innerHTML = bogvarmt;
};
//Menupunkt: Koldt
function bkoldt() {
	document.getElementById("menuindhold").innerHTML = bogkoldt;
};
//Menupunkt: Mad
function bmad() {
	document.getElementById("menuindhold").innerHTML = bogmad;
};


