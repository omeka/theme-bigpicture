(function($) {
    $(document).ready(function(){
        var playSpeed = $('#featured').data('play-speed');
        $("#featured-slides").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: playSpeed,
            arrows: false,
            centerMode: true,
            fade: true,
            dots: false,
            pauseOnHover: false
        });

        $('#featured-slides .slick-list').removeAttr('aria-live');

        $('#featured-controls button').on('click', function() {
            var activeButton = $(this);
            if (activeButton.hasClass('slick-pause')) {
                $("#featured-slides").slick('slickPause');
            } else {
                $("#featured-slides").slick('slickPlay');
            }
            $('#featured-controls button').addClass('active');
            activeButton.removeClass('active');
            $('#featured-controls .slick-status').toggleClass('active');
            $('#featured-controls .slick-status.active').focus();
        });

        var listboxTitle = $('#featured').data('listbox-title');
        $('.slick-track').attr('title', listboxTitle);
    });
 })(jQuery);