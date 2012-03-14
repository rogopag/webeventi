var jq = jQuery, Webeventi;

jq(document).ready(function()
{
	if(jq(".ngg-galleryoverview").is('div')){
		scrollAndDisplayLightbox();
		doScroll();
	}
	jq('li.menu-item a').corner("9px round");
	
	jq('div.header_contenitore_left').click(function(){
		window.location = Webeventi.site_url;
	});
	if( jq('div#map_canvas').is('div') )
	{
		initialize_map();
	}
});

var scrollAndDisplayLightbox = function(){
	jq("dt.gallery-icon a").lightBox({
		overlayBgColor: '#000',
		overlayOpacity: 0.6,
		containerResizeSpeed: 350,
		txtImage: '',
		txtOf: ''
	});
};
var doScroll = function(){
	jq('div.slideshowlink').remove();
	jq('.ngg-galleryoverview').galleryScroll();
};

function initialize_map() {
  var position = new google.maps.LatLng(45.4663028,7.871073199999955), parkings = [new google.maps.LatLng(45.46598301039967,7.8699466722137), new google.maps.LatLng(45.46685584361539,7.870515300524858), new google.maps.LatLng(45.46522679483349,7.871169759524491)];

  var map_options = {
    zoom: 12,
    center: position,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), map_options);
  var marker = new google.maps.Marker({
      position: position,
      map: map,
      title:"Webeventi"
  });
	marker.setIcon( Webeventi.template_url+'/img/map_pointer.png', 30, (0,0), (0,0) );
	for( var i in parkings)
	{
		var p = new google.maps.Marker({
		      position: parkings[i],
		      map: map,
		      title:"Webeventi"
		  });
		p.setIcon( Webeventi.template_url+'/img/car.png', 20, (0,0), (0,0) );
	}
}