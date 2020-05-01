$(document).ready(function () {
    
    $('.js-nav-feature').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '30px;'
    });
    
    
    /* Mobile Nav */
    $('.js-nav-icon').click(function() {
        var nav = $('.js-main-nav');
        
        nav.slideToggle(200)
    });

});