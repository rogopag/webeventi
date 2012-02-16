/* mark-up:

div#wrapper -> div.container -> div.inner-container -> div.img-box -> img

usage:
	$('div.inner-container').galleryScroll();
*/

(function( $ ){
	$.fn.galleryScroll = function() {
		var thumbsNum = this.children().length, imgCont = this.children().eq(0), imgContWidth = imgCont.width() + 18, scrollerButtons = '<div id="previous-button" class="gallery-buttons"></div><div id="next-button" class="gallery-buttons"></div>', el = this, count = 4, control, viewer = $('<div class="viewerFrame" id="viewerFrame" />'), wrap = $('<div id="wrapper">');
		
		this.wrap(wrap)
		this.wrapInner(viewer);
		this.parent().append(scrollerButtons);
		$('dl.gallery-item').css('width', '104px')
		
		var previous = function()
		{
			$('#next-button').bind('click',function(event){
				
				console.log("c:: "+count+" t:: "+imgContWidth.toString());
				if( count == 4 ) next();
				
				if( count == thumbsNum-1 ) $(this).unbind('click');
				
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
		
		var next = function()
		{
			$('#previous-button').bind('click',function(event){
				console.log("c:: "+count+" t:: "+thumbsNum);
			//	////console.log('#previous-button '+control+" "+count);
				
				if( count == 5 ) $(this).unbind('click');
				
				if( count == thumbsNum-1 ) previous();
				
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