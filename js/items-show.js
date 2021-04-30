if (!BigPicture) {
    var BigPicture = {};
}

(function($) {
    BigPicture.useLightslider = function(imageCount) {
        if ($.isFunction($.fn.lightSlider)) {
            $('#itemfiles').lightSlider({
                mode: 'fade',
                autoWidth: true,
                adaptiveHeight:false,
                gallery:true,
                item:1,
                loop:true,
                thumbItem:10,
                slideMargin:0,
                addClass: 'count-' + imageCount,
                enableDrag: false,
                currentPagerPosition:'middle',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#itemfiles .media',
                        download: false,
                        zoom: true,
                        youtubePlayerParams: {
                            modestbranding: 1,
                            showinfo: 0,
                            rel: 0,
                            controls: 1
                        },
                        vimeoPlayerParams: {
                            byline : 0,
                            portrait : 0,
                            color : 'A90707'
                        },
                    });
                }
            });
        }
    }
})(jQuery)