
	






/************************
 * 	 	Modules			*
 ************************/

fancybox = {

	works: function() {

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

	}
}


googleanalytics = {


	works: function() {

		//1er bloc js
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2427391-50']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	}
}


design = {

	textsize: function() {

		$("#boutonplus").on("click", design.biggersize)

		$("#boutonmoins").on("click", design.smallersize)

	},

	biggersize: function() {
		$(".services > p").css({fontSize: "1.2em"})
	},

	smallersize: function() {
		$(".services > p").css({fontSize: "0.8em"})
	}


}

/************************
 * 	 Objet principal 	*
 ************************/

app = {
	
	init: function() {

		console.log("app.init")

	},

	chargement: function(){

		console.log("app.chargement")

		fancybox.works();
		googleanalytics.works();
		design.textsize();

	}

}



/*************************
 * 	Chargement du DOM 	 *
 *	= chargement du html *
 *************************/

$(function() {
	console.log("chargement du dom")
	app.init()
})


/****************************
 * 	Chargement de la page	*
 *	= chargement des assets	*
 ****************************/

$(window).load(function() {
	console.log("chargement de la page")
	app.chargement()
});