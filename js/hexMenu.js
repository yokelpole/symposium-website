$(function() {
    /* Makes hex shapes the correct dimensions regardless of size */
    function hex() {
        var width = $('.welcome_hex_container').css('width');
        var height = $('.welcome_hex_container').css('height');
        var height = parseInt(height, 10);
        var tMargTop = height * .15;
        var tMargLeft = height * .05;
        var hexMargTop = height * .25;
        var borderSides = height * .45;
        var borderTopBot = (height * .25) / 2;
        var textSize = height * .15;

        $('.hexagon_text').css('font-size', textSize);
        $('.hexagon_text').css('margin-top', tMargTop);
        $('#symposium_hexagon .hexagon_text').css('margin-left', (height * .05));
        $('#groups_hexagon .hexagon_text').css('margin-left', (height * .15));
        $('#sponsors_hexagon .hexagon_text').css('margin-left', (height * .075));
        $('#register_hexagon .hexagon_text').css('margin-left', (height * .125));
        $('.hexagon').append('<style>#hexagon:after{ border-left:' + borderSides +
            '; border-left-color: white; border-left-style: solid; border-right:' + borderSides +
            '; border-right-color: white; border-right-style: solid; border-top:' + borderTopBot +
            '; border-top-color: #b5c531; border-top-style: solid; margin-top:' + hexMargTop +
            'px ;} </style> ');

        $('.hexagon').append('<style>#hexagon:before{ border-left:' + borderSides +
            '; border-left-color: white; border-left-style: solid; border-right:' + borderSides +
            '; border-right-color: white; border-right-style: solid; border-bottom:' + borderTopBot +
            '; border-bottom-color: #b5c531; border-bottom-style: solid; } </style> ');

        $('#symposium_hexagon .half_hexagon_text').css('margin-left', (height * .05));
        $('#groups_hexagon .half_hexagon_text').css('margin-left', (height * .15));
        $('#sponsors_hexagon .half_hexagon_text').css('margin-left', (height * .075));
        $('#register_hexagon .half_hexagon_text').css('margin-left', (height * .125));
        $('.homepage_hexagon').children('.half_hexagon_text').css('margin-left', (height * .075));
        $('.half_hexagon_text').css('font-size', (height * 0.125));
        $('.half_hexagon_text').css('margin-top', (height * .1));
        $('.halfHexagon').append('<style>.halfHexagon:after{ border-left:' + borderSides +
            '; border-left-color: white; border-left-style: solid; border-right:' + borderSides +
            '; border-right-color: white; border-right-style: solid; border-top:' + borderTopBot +
            '; border-top-color: #b5c531; border-top-style: solid;} </style> ');
    } //end hex function

    hex();

    // Handler for menu item clicks.
    $('.half_hexagon, .hexagon').click(function(clicked_hexagon) {
        var class_name = clicked_hexagon.currentTarget.classList[1];
        var site_is_narrow = $('.small_hex_container').css('right') === '0px' ? true : false;

        switch (class_name) {
            case 'groups_hexagon':
                $('html, body').animate({scrollTop: $('.groups').offset().top}, 800);
                break;
            case 'sponsors_hexagon':
                $('html, body').animate({scrollTop: $('.sponsors').offset().top}, 800);
                break;
            case 'symposium_hexagon':
                $('html, body').animate({scrollTop: $('.symposium').offset().top}, 800);
                break;
            case 'register_hexagon':
                $('html, body').animate({scrollTop: $('.registration').offset().top}, 800);
                break;
        }

        if (site_is_narrow) {
            // Make the menu go away after interacting with it.
            $('.half_hexagon').css('display', 'none');
        }
    });

    // Listener for clicks on the menu for mobile.
    $('#mobile_menu_button').click(function() {
        var half_hexagon = $('.half_hexagon');
        if (half_hexagon.css('display') === 'none') {
            half_hexagon.css('display', 'block');
        } else {
            half_hexagon.css('display', 'none');
        }
    });

    // Track user movement on page, used for the following:
    //   * Displaying / hiding the mobile menu.
    //   * Displaying / hiding the full site menu.
    //   * Displaying which area of the site the user is in.
    var last_position = $('.welcome_selection_menu').position().top;

    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var welcome_end_position = $('.welcome_selection_menu').position().top;
        var site_is_narrow = $('.small_hex_container').css('right') === '0px' ? true : false;


        if (y_scroll_pos > welcome_end_position) {
            // User has scrolled beyond the welcome area.
            // Hide the welcome page hexagons.
            big_hex_slide_out();
            showSmallMenu();
        } else {
            big_hex_slide_in();
            hideSmallMenu();
        }

        last_position = y_scroll_pos;

        // Check to see which floating menu item should have styling applied.
        $('.half_hexagon .half_hexagon_text').css('text-decoration', 'none');

        if (y_scroll_pos >= $('.registration').position().top) {
            $('.register_hexagon .half_hexagon_text').css('text-decoration', 'underline');
            return;
        }

        if (y_scroll_pos >= $('.symposium').position().top) {
            $('.symposium_hexagon .half_hexagon_text').css('text-decoration', 'underline');
            return;
        }

        if (y_scroll_pos >= $('.sponsors').position().top) {
            $('.sponsors_hexagon .half_hexagon_text').css('text-decoration', 'underline');
            return;
        }

        if (y_scroll_pos >= $('.groups').position().top) {
            $('.groups_hexagon .half_hexagon_text').css('text-decoration', 'underline');
            return;
        }
    });

    function big_hex_slide_out() {
        if ($('#sponsors_hexagon_big').css('margin-left') === '0px') {
            $('#sponsors_hexagon_big').animate({ 'margin-left' : '-1200px' }, 500);
            $('#symposium_hexagon_big').animate({ 'margin-left' : '1200px' }, 500);
            $('#groups_hexagon_big').animate({ 'margin-left' : '-1200px' }, 500);
            $('#register_hexagon_big').animate({ 'margin-left' : '1200px' }, 500);
        }
    }

    function big_hex_slide_in() {
        if ($('#sponsors_hexagon_big').css('margin-left') === '-1200px') {
            $('#sponsors_hexagon_big').animate({ 'margin-left' : '0px' }, 500);
            $('#symposium_hexagon_big').animate({ 'margin-left' : '0px' }, 500);
            $('#groups_hexagon_big').animate({ 'margin-left' : '0px' }, 500);
            $('#register_hexagon_big').animate({ 'margin-left' : '0px' }, 500);
        }
    }

    function showSmallMenu() {
        var floating_menu = $('#floating_menu');
        var mobile_menu_button = $('#mobile_menu_button');
        var half_hexagons = $('.half_hexagon');

        if (mobile_menu_button.css('display') === 'none' && half_hexagons.css('display') !== 'block') {
            half_hexagons.css('display', 'block');
        }

        if (floating_menu.css('top') == '-300px') {
            floating_menu.stop().animate({ 'top' : '0px' });
            mobile_menu_button.stop().animate({ 'top' : '5px' });
        }
    }

    function hideSmallMenu() {
        var floating_menu = $('#floating_menu');
        var mobile_menu_button = $('#mobile_menu_button');

        if (floating_menu.css('top') == '0px') {
            floating_menu.stop().animate({ 'top' : '-300px' });
            mobile_menu_button.stop().animate({ 'top' : '-300px' });
        }


    }
});// end ready
