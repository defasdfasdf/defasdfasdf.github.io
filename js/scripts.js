$(document).ready(function() {

	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

		if (scroll >= 90) {
				$('section.col-md-3.aboutnavpo').css({
					"padding-top": "0px",
					"max-height":"90%",
					"top":"30px",
				});
				$('section.col-md-3.aboutnavpo').removeClass('animated fadeInRight');
			$('section.col-md-3.aboutnavpo').addClass('animated fadeInLeft');
			$('.abnav').css({
			"background": "white",
			"-webkit-box-shadow": "0px 0px 25px 4px rgba(0,0,0,0.29)",
			"-moz-box-shadow": "0px 0px 25px 4px rgba(0,0,0,0.29)",
			"box-shadow": "0px 0px 25px 4px rgba(0,0,0,0.29)",
		});
		} else {
			$('section.col-md-3.aboutnavpo').removeClass('animated fadeInLeft');
			$('section.col-md-3.aboutnavpo').addClass('animated fadeInRight');
			$('section.col-md-3.aboutnavpo').css({
				"padding-top":"140px",
				"position":"fixed",
				"padding-left":"6px",
				"padding-right":"14px",
			});
			$('.abnav').css({
				"background": "none",
				"-webkit-box-shadow": "none",
				"-moz-box-shadow": "none",
				"box-shadow": "none",

		});
		}
		});
	});

	function mi(algo, active){
	 $(".MI_a").removeClass("MI_HL");
	 $(".MI_b").removeClass("MI_HL");
	 $(".MI_c").removeClass("MI_HL");
	 $(".MI_d").removeClass("MI_HL");
	 $(".MI_e").removeClass("MI_HL");
	 if (!active) {
	 $(".MI_" + algo).toggleClass("MI_HL");
 		}
	}

$('#HL_myr-gr').click(function() {
      mi("a");
});
$('#HL_x17').click(function() {
			mi("b");
});
$('#HL_blake2s').click(function() {
			mi("c");
});
$('#HL_lyra2v2').click(function() {
			mi("d");
});
$('#HL_scrypt').click(function() {
			mi("e");
});

$('#HL_myr-gr').click(function() {
      mi("a",$('#HL_myr-gr').hasClass("active"));
});
$('#HL_x17').click(function() {
      mi("b",$('#HL_x17').hasClass("active"));
});
$('#HL_blake2s').click(function() {
      mi("c",$('#HL_blake2s').hasClass("active"));
});
$('#HL_lyra2v2').click(function() {
      mi("d",$('#HL_lyra2v2').hasClass("active"));
});
$('#HL_scrypt').click(function() {
      mi("e",$('#HL_scrypt').hasClass("active"));
});

	/***************** Waypoints ******************/

	$('.procard1').waypoint(function() {
		$('.procard1').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard2').waypoint(function() {
		$('.procard2').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard3').waypoint(function() {
		$('.procard3').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard4').waypoint(function() {
		$('.procard4').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard5').waypoint(function() {
		$('.procard5').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard6').waypoint(function() {
		$('.procard6').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard7').waypoint(function() {
		$('.procard7').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard8').waypoint(function() {
		$('.procard8').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard9').waypoint(function() {
		$('.procard9').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard10').waypoint(function() {
		$('.procard10').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard11').waypoint(function() {
		$('.procard11').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard12').waypoint(function() {
		$('.procard12').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard13').waypoint(function() {
		$('.procard13').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard14').waypoint(function() {
		$('.procard14').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard15').waypoint(function() {
		$('.procard15').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard16').waypoint(function() {
		$('.procard16').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard17').waypoint(function() {
		$('.procard17').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard18').waypoint(function() {
		$('.procard18').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard19').waypoint(function() {
		$('.procard19').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard20').waypoint(function() {
		$('.procard20').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard21').waypoint(function() {
		$('.procard21').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard22').waypoint(function() {
		$('.procard22').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard23').waypoint(function() {
		$('.procard23').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard24').waypoint(function() {
		$('.procard24').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.procard25').waypoint(function() {
		$('.procard25').addClass('animated fadeIn');
	}, {
		offset: '95%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});

	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated rollIn slideInRight');
		$('.twp3').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});
var x = 0;
	$('.bpsig1').waypoint(function() {
		if (x==0){
			x++;
		$('.bpsig1').addClass('animated fadeIn');
		$('.bpsig2').addClass('animated fadeIn');
		$('.bpsig3').addClass('animated fadeIn');
		$('.bpsigi1').addClass('animated fadeInUp');
		$('.bpsigi2').addClass('animated fadeInUp');
		$('.bpsigi3').addClass('animated fadeInUp');
		$('.intro-feature .intro-content p').addClass("active");
	}
		setTimeout(removeanimated, 1000);
		function removeanimated(){
			console.log("hello");
			$('.bpsigi1').removeClass('animated');
			$('.bpsigi2').removeClass('animated');
			$('.bpsigi3').removeClass('animated');
		}
	}, {
		offset: '85%'
	});

	$('.fc1').waypoint(function() {
		$('.fc1').addClass('animated fadeInUp');
		$('.fc2').addClass('animated fadeInUp');
		$('.fc3').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.spa').waypoint(function() {
		$('.icon1').addClass('animated fadeInUp');
		$('.icon2').addClass('animated fadeInUp');
		$('.icon3').addClass('animated fadeInUp');
		$('.icon4').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.fc').waypoint(function() {
		$('.fc').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.gum').waypoint(function() {
		$('.gum').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.18q1').waypoint(function() {
		$('.18q1').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.18q2').waypoint(function() {
		$('.18q2').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});
	$('.18q3').waypoint(function() {
		$('.18q3').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.18q4').waypoint(function() {
		$('.18q4').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});
	$('.walletss').waypoint(function() {
		$('.walletss').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.comps').waypoint(function() {
		$('.comps').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.moreinformations').waypoint(function() {
		$('.mi1').addClass('animated fadeInUp');
		$('.mi2').addClass('animated fadeInUp');
		$('.mi3').addClass('animated fadeInUp');
		$('.mi4').addClass('animated fadeInUp');
		$('.mi5').addClass('animated fadeInUp');
		$('.mi6').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});

	/***************** Initiate Flexslider ******************/
	$('.flexslider').flexslider({
		animation: "slide"
	});

	/***************** Initiate Fancybox ******************/

	$('.single_image').fancybox({
		padding: 4,
	});

	/***************** Tooltips ******************/
    $('[data-toggle="tooltip"]').tooltip();
		$(function(){
	     $('ul.tabs').tabs();
	   });

	/***************** Nav Transformicon ******************/
	/* When user clicks the Icon */
	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('open');
		event.preventDefault();
	});
	/* When user clicks a link */
	$('.header-nav li a').click(function() {
		$('.nav-toggle').toggleClass('active');
		$('.header-nav').toggleClass('open');

	});
	$('.collapsible').collapsible();
	$('.scrollspy').scrollSpy();
		 $('.carousel').carousel();



	/***************** Header BG Scroll ******************/
	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 20) {
				$('section.navigation').addClass('fixed mdl-shadow--4dp');
				$('section.fixed').addClass('fixed mdl-shadow--4dp');
				$('.logo a img').css({
					"height": "40px",
				});

				$('header .member-actions').css({
					"top": "26px",
				});
			}else {
				$('.logo a img').css({
					"height": "50px",
				});
				$('section.navigation').removeClass('fixed mdl-shadow--4dp');
				$('section.fixed').removeClass('mdl-shadow--4dp');
				$('header').css({
					"padding": "30px 0"
				});
				$('section.navigation header').removeClass('noborder');

				$('header .member-actions').css({
					"top": "41px",
				});
			}
	});
});
/*Hover for the footer*/
$(".iconholder").hover(
  function () {
    $(this).addClass('mdl-shadow--6dp');
  },
  function () {
    $(this).removeClass('mdl-shadow--6dp');
  }
  );
});
