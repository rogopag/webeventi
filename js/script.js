var jq = jQuery;
jq(document).ready(function()
{
	if(jq("#viewer").is('div')){
		scrollAndDisplayLightbox();
		doScroll();
	}
	if( !jq.support.leadingWhitespace )
	{
		doCornersForIEShit();
	}
	
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
function doCornersForIEShit()
{
	jq('li.page_item a').corner();
	jq('li.page_item a').mouseenter(function(){
		jq(this).corner().parent().css('padding', '0px');
	}).mouseleave(function(){
		jq(this).uncorner();
	});	
};
