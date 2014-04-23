$(function(){
	/*
	$('.small_hex_container').children('#groups_hexagon').hide();
	$('.small_hex_container').children('#register_hexagon').hide();
	$('.small_hex_container').children('#symposium_hexagon').hide();
	$('.small_hex_container').children('#sponsors_hexagon').hide();
	*/

	var which_hex = '';
	/* Makes hex shapes the correct dimensions regardless of size */
	function hex(){
		var width = $('.welcome_hex_container').css('width');
		var height = $('.welcome_hex_container').css('height');
		var height = parseInt(height, 10);
		var tMargTop = height * .15;
		var tMargLeft = height * .05;
		var hexMargTop = height * .25;
		var borderSides = height * .45;
		var borderTopBot = (height * .25)/2;
		var textSize = height * .15;

		$('.hexagon_text').css('font-size', textSize);
		$('.hexagon_text').css('margin-top', tMargTop);
		$('#symposium_hexagon .hexagon_text').css('margin-left', (height*.05));
		$('#groups_hexagon .hexagon_text').css('margin-left', (height*.15));
		$('#sponsors_hexagon .hexagon_text').css('margin-left', (height*.075));
		$('#register_hexagon .hexagon_text').css('margin-left', (height*.125));
		$('.hexagon').append('<style>#hexagon:after{ border-left:' + borderSides +'; border-left-color: white; border-left-style: solid; border-right:' + borderSides +'; border-right-color: white; border-right-style: solid; border-top:' + borderTopBot +'; border-top-color: #b5c531; border-top-style: solid; margin-top:' + hexMargTop + 'px ;} </style> ');

		$('.hexagon').append('<style>#hexagon:before{ border-left:' + borderSides +'; border-left-color: white; border-left-style: solid; border-right:' + borderSides +'; border-right-color: white; border-right-style: solid; border-bottom:' + borderTopBot +'; border-bottom-color: #b5c531; border-bottom-style: solid; } </style> ');


		$('#symposium_hexagon .half_hexagon_text').css('margin-left', (height*.05));
		$('#groups_hexagon .half_hexagon_text').css('margin-left', (height*.15));
		$('#sponsors_hexagon .half_hexagon_text').css('margin-left', (height*.075));
		$('#register_hexagon .half_hexagon_text').css('margin-left', (height*.125));
		$('.homepage_hexagon').children('.half_hexagon_text').css('margin-left', (height*.075));
  		$('.half_hexagon_text').css('font-size', (height*0.125));
  		$('.half_hexagon_text').css('margin-top', (height * .1)); 
  		$('.halfHexagon').append('<style>.halfHexagon:after{ border-left:' + borderSides +'; border-left-color: white; border-left-style: solid; border-right:' + borderSides +'; border-right-color: white; border-right-style: solid; border-top:' + borderTopBot +'; border-top-color: #b5c531; border-top-style: solid;} </style> ');
	} //end hex function

	hex();

	$('#sponsors_hexagon').click(function(){
		which_hex = 'sponsors';
		big_hex_slide_out();
		var p = $(".sponsors").position();
		$('html, body').animate({scrollTop: $('.sponsors').offset().top}, 800);
		showSmallMenu(which_hex);
	});// end sponsors click

	$('#groups_hexagon').click(function(){
		which_hex = 'groups';
		big_hex_slide_out();
		var p = $(".groups").position();
		$('html, body').animate({scrollTop: $('.groups').offset().top}, 800);
		showSmallMenu(which_hex);
	});// end groups click

	$('#symposium_hexagon').click(function(){
		which_hex = 'symposium';
		big_hex_slide_out();
		var p = $(".symposium").position();
		$('html, body').animate({scrollTop: $('.symposium').offset().top}, 800);
		showSmallMenu(which_hex);
	});// end symposium click

	$('#register_hexagon').click(function(){
		which_hex = 'register';
		big_hex_slide_out();
		var p = $(".registration").position();
		$('html, body').animate({scrollTop: $('.registration').offset().top}, 800);
		showSmallMenu(which_hex);
	});// end register click



	function big_hex_slide_out(){
		$('#sponsors_hexagon').animate({ 'margin-left':  '-=600px'
                }, 500);
		$('#symposium_hexagon').animate({ 'margin-left':  '+=800px'
                }, 500).delay(100);
		$('#groups_hexagon').animate({ 'margin-left':  '-=800px'
                }, 500);
		$('#register_hexagon').animate({ 'margin-left':  '+=600px'
                }, 500);
	}

	function big_hex_slide_in(){
		$('#sponsors_hexagon').animate({ 'margin-left':  '+=600px'
                }, 500);
		$('#symposium_hexagon').animate({ 'margin-left':  '-=800px'
                }, 500).delay(100);
		$('#groups_hexagon').animate({ 'margin-left':  '+=800px'
                }, 500);
		$('#register_hexagon').animate({ 'margin-left':  '-=600px'
                }, 500);
	}

	function showSmallMenu(which_hex){
		$('.small_hex_container').children().removeClass('homepage_hexagon');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').addClass('homepage_hexagon');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').css('background-color', 'black');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').append('<style> .small_hex_container #'+which_hex+'_hexagon:after{ border-top-color: black }');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.homepage_hexagon').children('.half_hexagon_text').css('margin-left', '15px');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').children('.half_hexagon_text').text('HOMEPAGE');
		var delay = 500;
		$('#'+which_hex).children('#groups_hexagon').delay(delay).fadeIn(800);
		delay += 500;
		$('#'+which_hex).children('#sponsors_hexagon').delay(delay).fadeIn(800)
		delay += 500;
		$('#'+which_hex).children('#symposium_hexagon').delay(delay).fadeIn(800);
		delay += 500;
		$('#'+which_hex).children('#register_hexagon').delay(delay).fadeIn(800);
	}

	$('.half_hexagon').click(function(){
		var p = $(".welcome_graphic").position();
		$('html, body').animate({scrollTop: $('.welcome_graphic').offset().top}, 800).delay(1000);
		big_hex_slide_in();
	}); //end homepage click

	function hideSmallMenu(which_hex){
		$('.small_hex_container').children().fadeOut(500);
		$('.homepage_hexagon').removeClass('homepage_hexagon');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').addClass('homepage_hexagon');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').css('background-color', 'black');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').append('<style> .small_hex_container #'+which_hex+'_hexagon:after{ border-top-color: black }');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.homepage_hexagon').children('.half_hexagon_text').css('margin-left', '15px');
		$('.small_hex_container').children('#'+which_hex+'_hexagon').children('.half_hex_center_box').children('.half_hexagon_text').text('HOMEPAGE');
	}
});// end ready