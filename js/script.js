// JavaScript Document
//Pauser Carousel på Bogcafesiden, når musen hover over objektet
$('#bogeventscarousel').hover(function(){
   $("#bogeventscarousel").carousel('pause');
},function(){
   $("#bogeventscarousel").carousel('cycle');
});