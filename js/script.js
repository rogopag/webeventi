var jq = jQuery, Webeventi;

jq(document).ready(function()
{
	if(jq("#viewer").is('div')){
		scrollAndDisplayLightbox();
		doScroll();
	}
	jq('li.page_item a').corner("6px round");
	
	jq('div.header_contenitore_left').click(function(){
		window.location = Webeventi.site_url;
	});	
});

var scrollAndDisplayLightbox = function(){
	jq("a.lightboxA").lightBox({
		overlayBgColor: '#000',
		overlayOpacity: 0.6,
		containerResizeSpeed: 350,
		txtImage: '',
		txtOf: ''
	});
};
var doScroll = function(){
	jq('.viewerFrame').galleryScroll();
};