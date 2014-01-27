
/* JS and touch screen support */
jQuery('html').removeClass('no-js');
if (!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch)) jQuery('html').addClass('no-touch');

// Fixing the iOS orientation / viewport zoom bug
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i)) {
	var viewportmeta = document.querySelector('meta[name="viewport"]');
	if (viewportmeta) {
		viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
		document.body.addEventListener('gesturestart', function() {
			viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6'; }, false);
	}
}

jQuery(document).ready(function () {

	jQuery('.tooltip').tip();
	jQuery('.tabs, .rotator').tabify();

	var s = document.createElement('p').style, supportForTransitions = 'transition' in s || 'WebkitTransition' in s || 'MozTransition' in s || 'msTransition' in s || 'OTransition' in s, transitionSpeed = 250, transitionProp = 'all ' + transitionSpeed + 'ms ease';
	jQuery(document).delegate('.thumb.directional', 'mouseenter mouseleave', function( event ) {
		var $el = $(this), $hoverElem = $el.find('.info'), w = $el.width(), h = $el.height(), x = ( event.pageX - $el.offset().left - ( w/2 )) * ( w > h ? ( h/w ) : 1 ), y = ( event.pageY - $el.offset().top  - ( h/2 )) * ( h > w ? ( w/h ) : 1 ), direction = Math.round( Math.atan2(y, x) / 1.57079633 + 5 ) % 4, fromStyle, toStyle, slideFromTop = { left : '0px', top : '-100%' }, slideFromBottom = { left : '0px', top : '100%' }, slideFromLeft = { left : '-100%', top : '0px' }, slideFromRight = { left : '100%', top : '0px' }, slideTop = { top : '0px' }, slideLeft = { left : '0px' };
		switch( direction ) {
			case 0: // from top
				fromStyle = slideFromTop;
				toStyle = slideTop;
				break;
			case 1: // from right
				fromStyle = slideFromRight;
				toStyle = slideLeft;
				break;
			case 2: // from bottom
				fromStyle = slideFromBottom;
				toStyle = slideTop;
				break;
			case 3: // from left
				fromStyle = slideFromLeft;
				toStyle = slideLeft;
				break;
		};
		if( event.type === 'mouseenter' ) {
			$hoverElem.hide().css(fromStyle).show(0, function() {
				var $elem = $( this );
				if( supportForTransitions ) {
					$elem.css( 'transition', transitionProp );
				}
				$.fn.applyStyle = supportForTransitions ? $.fn.css : $.fn.animate;
				$elem.stop().applyStyle( toStyle, $.extend( true, [], { duration : transitionSpeed + 'ms' } ) );
			});
		}
		else {
			if( supportForTransitions ) {
				$hoverElem.css( 'transition', transitionProp);
			}
			$.fn.applyStyle = supportForTransitions ? $.fn.css : $.fn.animate;
			$hoverElem.stop().applyStyle( fromStyle, $.extend( true, [], { duration : transitionSpeed + 'ms' } ) );
		}
	});

	jQuery('.collapse .collapse-title').click(function(e){
		$li = jQuery(this).parent('li');
		$ul = $li.parent('.collapse');
		// check if only one collapse can be opened at a time
		if ($ul.hasClass('only-one-visible')) {
			jQuery('li',$ul).not($li).removeClass('active');
		}
		$li.toggleClass('active');
		e.preventDefault();
	});

	jQuery('.lightbox').fancybox({
		padding : 5,
		margin : [50, 20, 20, 20],
		maxWidth : '90%',
		maxHeight : '90%',
		loop : true,
		fitToView : true,
		mouseWheel : false,
		closeClick : true,
		helpers : {
			media : { } ,
			title : { type : 'outside' },
			overlay : { showEarly  : true, locked : false }
		}
	});

	if (jQuery('html').hasClass('no-touch')) {
		jQuery('#menu li').hover(
			function () { jQuery(this).addClass("hover"); },
			function () { jQuery(this).removeClass("hover"); }
		);
	}
	if (!jQuery('html').hasClass('no-touch')) {
		jQuery('#menu li.has-children > a').hover( function (e) {
			if (!jQuery('#menu').hasClass('mobile')) {
				jQuery(this).parent().addClass("hover");
			}
		}, function (e) {
			if (!jQuery('#menu').hasClass('mobile')) {
				jQuery(this).parent().removeClass("hover");
			}
		});
	}

	jQuery('#menu-switch').click(function(e) {
		jQuery(this).toggleClass('on');
		jQuery('#menu').toggleClass('mobile');
		return false;
	});

	var $top_link = jQuery('#top-link');
	$top_link.click(function(e) {
		jQuery('html, body').animate({scrollTop:0}, 750);
		e.preventDefault();
		return false;
	});

	jQuery(window).resize(function() {
		if (jQuery(window).width() >= 768) {
			jQuery('#menu-switch').removeClass('on');
			jQuery('#menu').removeClass('mobile');
			jQuery('#tooltip:visible').css("opacity", 0);
			jQuery('.filter-container').css("height", '');
		}
	});
});