"use strict";
var mapStyles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#FFC61A"
            },
            {
                "visibility": "on"
            }
        ]
    }
];

$(document).on('ready', function() {
    initParallax();
    initEvents();
    initMasonry();
    initMap();
    checkScrollAnimation();
    $(function() {
        $('.matchHeight').matchHeight();
    });
    $(".accordion").accordion();
    $(".tabs-ui").tabs();
    $('.swipebox').swipebox();
    $('.navbar-affix').affix({
        offset: {
            top: $('#top-bar').height(),
        }
    });
    initSwiper();
});
$(window).on('scroll', function(event) {
    checkNavbar();
    checkCountUp();
    checkScrollAnimation();
    initProgressBar();
}).scroll();
$(window).on('resize', function() {
    initParallax();
});
$(window).on('load', function() {
    initMasonry()
});

function initEvents() {
    $('.menu-types').on('click', 'a', function() {
        $(this).addClass('active').siblings('.active').removeClass('active');
        $(this).parent().find('.type-value').val($(this).data('value'));
        return false;
    });
    $('footer').on('click', '.go-top', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}

function initParallax() {
    if (/Mobi/.test(navigator.userAgent)) return false;
    $('.parallax').parallax("50%", 0.1);
}

function initSwiper() {
    var clientsSwiper = new Swiper('#testimonials-slider', {
        direction: 'horizontal',
        speed: 1000,
        nextButton: '.arrow-right',
        prevButton: '.arrow-left',
        autoplay: 7000,
        autoplayDisableOnInteraction: false,
    });
    var innerSwiper = new Swiper('.slider-inner', {
        direction: 'horizontal',
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
    });
    $(window).on('resize', function() {
        var ww = $(window).width()
        if ($('#testimonials-slider').length) {
            if (ww > 1000) {
                clientsSwiper.params.slidesPerView = 3;
            }
            if (ww <= 1000) {
                clientsSwiper.params.slidesPerView = 2;
            }
            if (ww <= 479) {
                clientsSwiper.params.slidesPerView = 1;
            }
            clientsSwiper.update();
        }
    }).resize();
}

function initMasonry() {
    $('.masonry').masonry({
        itemSelector: '.item',
        columnWidth: '.item'
    });
}

function initProgressBar() {
    var block = $('.progressItems');
    if (block.length) {
        var scrollTop = block.offset().top - window.innerHeight;
        if (!block.data('counted') && $(window).scrollTop() > scrollTop) {
            $('.progressBar').each(function(i, el) {
                progressBar(parseInt($(el).find('.value').html(), 10), $(el));
            });
            block.data('counted', 1);
        }
    }
}

function progressBar(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('.bar div').animate({
        width: progressBarWidth
    }, 1000);
}

function checkScrollAnimation() {
    var scrollBlock = $('#car-block');
    if (scrollBlock.length) {
        var scrollTop = scrollBlock.offset().top - window.innerHeight;
        if (!scrollBlock.data('done') && $(window).scrollTop() > scrollTop) {
            $('#car-block .animation-block img').addClass('slideleft');
            scrollBlock.data('done', 1);
        }
    }
}

function checkCountUp() {
    var countBlock = $('.skills');
    if (countBlock.length) {
        var scrollTop = countBlock.offset().top - window.innerHeight;
        if (!countBlock.data('counted') && $(window).scrollTop() > scrollTop) {
            for (var x = 1; x <= 4; x++) {
                var numAnim = new CountUp('countUp-' + x, 1, $('#countUp-' + x).html());
                numAnim.start();
            }
            countBlock.data('counted', 1);
        }
    }
}

function checkNavbar() {
    var scroll = $(window).scrollTop(),
        navBar = $('nav.navbar'),
        slideDiv = $('.slider-full');
    if (scroll > 1) navBar.addClass('dark');
    else navBar.removeClass('dark');
}

function initMap() {
    var mapEl = $('#map');
    if (mapEl.length) {
        var uluru = {
            lat: mapEl.data('lat'),
            lng: mapEl.data('lng')
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: mapEl.data('zoom'),
            center: uluru,
            scrollwheel: false,
            styles: mapStyles
        });
        var marker = new google.maps.Marker({
            position: uluru,
            // icon: 'public/images/logo-map.png',
            map: map,
            title:'ABER',
            label:'A'
        });
    }
}