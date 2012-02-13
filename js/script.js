$(document).ready(function(){
	$.swapImage(".swapImage");
	if($("#viewer").is('div')){
		scrollAndDisplayLightbox();
		doScroll();
	}
});

var scrollAndDisplayLightbox = function(){
	$("a.lightboxA").lightBox({
		overlayBgColor: '#000',
		overlayOpacity: 0.6,
		containerResizeSpeed: 350,
		txtImage: '',
		txtOf: ''
	});
};
var doScroll = function(){
	$('.viewerFrame').galleryScroll();
};


//$('.NOMECLASSE').funzione();
//$('#NOMEID').funzione();
