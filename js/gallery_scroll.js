/* mark-up:

div#wrapper -> div.container -> div.inner-container -> div.img-box -> img

usage:
	$('div.inner-container').galleryScroll();
*/

(function( $ ){
	$.fn.galleryScroll = function() {
		var thumbsNum = ( jq('.ngg-gallery-thumbnail-box').length ) ? jq('.ngg-gallery-thumbnail-box').length  : this.children().length, imgCont = this.children().eq(0), imgContWidth = imgCont.width(), scrollerButtons = '<div id="previous-button" class="gallery-buttons"></div><div id="next-button" class="gallery-buttons"></div>', el = this, count = 8, control, viewer = $('<div class="viewerFrame" id="viewerFrame" />'), wrap = $('<div id="wrapper">');

		
		this.wrap(wrap)
		this.wrapInner(viewer);
		if( thumbsNum > count )
		this.parent().append(scrollerButtons);
		$('dl.gallery-item').css('width', '104px');
		
		///////SX
		var previous = function()
		{
			$('#previous-button').bind('click',function(event){
				
			//	console.log("sxxxx:: "+count+" t:: "+thumbsNum);
				
				if( count == 8 ) next();
				
				if( count == thumbsNum - 1 ) $(this).unbind('click');
				
				$("#viewerFrame").animate({
					left: '-='+imgContWidth.toString()
				},
				{
					duration: 200,
					easing: 'swing',
					step: function(now, fx) 
					{

					},
					complete: function()
					{

					}
				});
				count++;
			});
		}
		////// DX
		var next = function()
		{
			$('#next-button').bind('click',function(event){
				
			//	console.log("dxxxx:: "+count+" t:: "+thumbsNum);
				
				if( count == 9 ) $(this).unbind('click');
				if( count < thumbsNum + 1 ) previous();
				
				$("#viewerFrame").animate({
					left: '+='+imgContWidth.toString()
				},
				{
					duration: 200,
					easing: 'swing',
					step: function(now, fx) 
					{

					},
					complete: function()
					{

					}
				});
				count--;
			});
		}
		previous();
	};
	})( jQuery );