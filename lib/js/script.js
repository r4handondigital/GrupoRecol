$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/

	$(".button-collapse").sideNav();

	$(".dropdown-button").dropdown({
		hover:false
	});

	 $('.img-destaques').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    items:1
	});

	  $('.super-destaque').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    items:1
	});

	 $('.nav-empresas').owlCarousel({
	    loop:true,
	    margin:30,
	    dots:false,
	    navText: ["",""],
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	});
});























