// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen :hover over elementet
$('#bogeventscarousel').hover(function(){
   $("#bogeventscarousel").carousel('pause');
},function(){
   $("#bogeventscarousel").carousel('cycle');
});

		//js for baggrundsmusik
		var aud = document.getElementById("music");

		function playAudio() {
			aud.play();
		}

		function pauseAudio() {
			aud.pause();
		};
//KNAP DER VIRKER
function wtf(){
	document.getElementById("bitch").innerHTML = "<p>kom nu</p>" ;
};
//KNAP DER ER DUM 
function vvinkort(){
	document.getElementById("menuindhold").innerHTML = "<p>kom nu</p>" ;
};
