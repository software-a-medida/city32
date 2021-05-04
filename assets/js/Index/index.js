'use strict';

$(document).ready(function()
{
    var slideshow = $('#slideshow > .owl-carousel').owlCarousel({
        stagePadding: 0,
        items: 1,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        rewind: true,
        loop: true
    });

    $('[data-action="prev_slideshow"]').on('click', function()
    {
        slideshow.trigger('prev.owl.carousel');
        slideshow.trigger('stop.owl.autoplay');

        setTimeout(function() { slideshow.trigger('play.owl.autoplay'); }, '60000');
    });

    $('[data-action="next_slideshow"]').on('click', function()
    {
        slideshow.trigger('next.owl.carousel');
        slideshow.trigger('stop.owl.autoplay');

        setTimeout(function() { slideshow.trigger('play.owl.autoplay'); }, '60000');
    });

    $('[data-fancybox]').fancybox({
        padding: 0
    });
});
