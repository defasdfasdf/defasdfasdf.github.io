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

	/***************** Waypoints ******************/

	$('.procard1').waypoint(function() {
		$('.procard1').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard2').waypoint(function() {
		$('.procard2').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard3').waypoint(function() {
		$('.procard3').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard4').waypoint(function() {
		$('.procard4').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard5').waypoint(function() {
		$('.procard5').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard6').waypoint(function() {
		$('.procard6').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard7').waypoint(function() {
		$('.procard7').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard8').waypoint(function() {
		$('.procard8').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard9').waypoint(function() {
		$('.procard9').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard10').waypoint(function() {
		$('.procard10').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard11').waypoint(function() {
		$('.procard11').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard12').waypoint(function() {
		$('.procard12').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard13').waypoint(function() {
		$('.procard13').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard14').waypoint(function() {
		$('.procard14').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard15').waypoint(function() {
		$('.procard15').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard16').waypoint(function() {
		$('.procard16').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard17').waypoint(function() {
		$('.procard17').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard18').waypoint(function() {
		$('.procard18').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard19').waypoint(function() {
		$('.procard19').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard20').waypoint(function() {
		$('.procard20').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard21').waypoint(function() {
		$('.procard21').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard22').waypoint(function() {
		$('.procard22').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard23').waypoint(function() {
		$('.procard23').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard24').waypoint(function() {
		$('.procard24').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.procard25').waypoint(function() {
		$('.procard25').addClass('animated fadeIn');
	}, {
		offset: '55%'
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
	$('.bpsig1').waypoint(function() {
		$('.bpsig1').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.bpsig2').waypoint(function() {
		$('.bpsig2').addClass('animated fadeIn');
	}, {
		offset: '55%'
	});
	$('.bpsig3').waypoint(function() {
		$('.bpsig3').addClass('animated fadeIn');
	}, {
		offset: '40%'
	});
	$('.fc1').waypoint(function() {
		$('.fc1').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.fc2').waypoint(function() {
		$('.fc2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.fc3').waypoint(function() {
		$('.fc3').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.spa').waypoint(function() {
		$('.spa').addClass('animated fadeInUp');
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

	/***************** Header BG Scroll ******************/

	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 20) {
				$('section.navigation').addClass('fixed mdl-shadow--4dp');
				$('section.fixed').addClass('fixed mdl-shadow--4dp');
				$('header').css({
					"padding": "20px 0"
				});
				$('.logo a img').css({
					"height": "40px",
				});

				$('header .member-actions').css({
					"top": "26px",
				});
				$('header .navicon').css({
					"top": "34px",
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
				$('header .navicon').css({
					"top": "48px",
				});
			}
	});
});
	/***************** Smooth Scrolling ******************/

	$(function() {

		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 2000);
					return false;
				}
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
