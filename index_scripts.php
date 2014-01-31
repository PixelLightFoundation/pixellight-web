<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.common.min.js"></script>
<script type="text/javascript" src="js/site.js"></script>
<script type="text/javascript" src="js/plugins/jquery.iosslider.min.js"></script>
<script type="text/javascript">
jQuery(function(){
	jQuery('.iosSlider').iosSlider({
		snapToChildren: true,
		desktopClickDrag: true,
		keyboardControls: false,
		infiniteSlider: true,
		autoSlide: true,
		scrollbar: true,
		scrollbarHide: false,
		autoSlideTransTimer: 1500,
//		navNextSelector: jQuery('.iosSlider .next'),
//		navPrevSelector: jQuery('.iosSlider .prev')
	});
	if (jQuery('.iosSlider .item').length < 2) {
		jQuery('.iosSlider .controls').remove();
	}
});
</script>