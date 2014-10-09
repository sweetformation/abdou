//1er bloc js
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2427391-50']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	
//2eme bloc js
$("a[rel=shadowbox]").fancybox({
				'cyclic' : 	true,
				//'autoScale' : 	true,
				'centerOnScroll ' :	true,
				'overlayOpacity' : 	0.8,
				'overlayColor' : '#000',
				'titleShow' : 	false,
				'transitionIn'	: 'fade',
				'transitionOut'	: 'fade'
			});
