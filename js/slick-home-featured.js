(function($) {
    $(document).ready(function(){
        $("#featured-slides").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            centerMode: true,
            fade: true,
            dots: false,
            pauseOnHover: false
        });

        $('#featured-controls button').on('click', function() {
            var activeButton = $(this);
            if (activeButton.hasClass('slick-pause')) {
                $("#featured-slides").slick('slickPause');
            } else {
                $("#featured-slides").slick('slickPlay');
            }
            $('#featured-controls button').addClass('active');
            activeButton.removeClass('active');
        });

        var listboxTitle = $('#featured').data('listbox-title');
        $('.slick-track').attr('title', listboxTitle);
    });
 })(jQuery);