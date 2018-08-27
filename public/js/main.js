$(document).ready(function($) {
    $('#popup').modal('show');
    if ($('header.top').length) {
        $(window).scroll(function() {
            var anchor = $('header.top').offset().top;
            if (anchor >= 130) {
                $('header.top').addClass('cmenu');
            } else {
                $('header.top').removeClass('cmenu');
            }
        });
    }
    $('.regis-link').click(function(e) {
        e.preventDefault();
        $('.on').removeClass('on');
        el = $(this);
        name = el.attr('href');
        pos = $(name).position().top - 70;
        el.addClass('on');
        $('html,body').stop().animate({
            scrollTop: pos
        }, 600);
        return false;
    });
    $('.search-open').on('click', function(event) {
        event.preventDefault();
        $('.top-search').toggleClass('on');
    });
    $('.inter-sum').after().on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('on');
        $(this).children('.inter-sum-content').toggleClass('on');
    });
    new WOW({}).init();
    if ($('.to-top').length) {
        $('.to-top').on('click', function(event) {
            event.preventDefault();
            $('body, html').stop().animate({
                scrollTop: 0
            }, 800)
        });
        $(window).scroll(function() {
            var anchor = $('.to-top').offset().top;
            if (anchor > 1000) {
                $('.to-top').css('opacity', '1')
            } else {
                $('.to-top').css('opacity', '0')
            }
        });
    }
    $("#menu").mmenu({
        "extensions": ["pagedim-black", "shadow-panels"]
    }, {
        clone: true
    });
    $("#slider").nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 1300,
        pauseTime: 5000,
        startSlide: 0,
        directionNav: true,
        controlNav: false,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
        prevText: '<img src=" '+ baseUrl() + '/public/images/left1.png" title="" alt="">',
        nextText: '<img src="'+ baseUrl() + '/public/images/right1.png" title="" alt="">',
        randomStart: true,
        beforeChange: function() {},
        afterChange: function() {},
        slideshowEnd: function() {},
        lastSlide: function() {},
        afterLoad: function() {}
    });
    $('.project-slider').slick({
        dots: false,
        autoplay: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right1.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left1.png" alt="" title=""></button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.video-slider').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left.png" alt="" title=""></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.blog-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left.png" alt="" title=""></button>',
        responsive: [{
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.brand-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left.png" alt="" title=""></button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 2
            }
        }]
    });
    $('.tes-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        speed: 300,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right2.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left2.png" alt="" title=""></button>'
    });
    $('.tes2-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.dstyle-detail-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.inter-slider').slick({
        draggable: true,
        accessibility: false,
        variableWidth: true,
        swipeToSlide: true,
        autoplay: true,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right1.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left1.png" alt="" title=""></button>',
        slidesToScroll: 1,
        centerMode: true,
        responsive: [{
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        asNavFor: '.slider-nav',
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right1.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left1.png" alt="" title=""></button>'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 3
            }
        }]
    });
    $('.pdetail-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        asNavFor: '.pdetail-nav',
        nextArrow: '<button type="button" class="slick-next"><img src="'+ baseUrl() + '/public/images/right3.png" alt="" title=""></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="'+ baseUrl() + '/public/images/left3.png" alt="" title=""></button>'
    });
    $('.pdetail-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.pdetail-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 3
            }
        }]
    });
    $('.plink-slider, .pdetail-slider, .video-reslider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 560,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $(".button").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    if ($("[data-fancybox]").length) {
        $("[data-fancybox]").fancybox({});
        if ($('.linkyoutube').length) {
            var url = $('.linkyoutube').attr('href').replace('watch?v=', 'embed/');
            $('.linkyoutube').attr('href', url);
        }
    }
});