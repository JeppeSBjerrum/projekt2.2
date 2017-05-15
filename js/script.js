// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen hover over objektet
$('#bogeventscarousel').hover(function(){
   $("#bogeventscarousel").carousel('pause');
},function(){
   $("#bogeventscarousel").carousel('cycle');
});

		//js for baggrundslyd
		var aud = document.getElementById("music");

		function playAudio() {
			aud.play();
		}

		function pauseAudio() {
			aud.pause();
		}


