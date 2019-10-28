if (!BigPicture) {
    var BigPicture = {};
}

(function($) {
    BigPicture.useChocolat = function() {
        var inContainer = $("#itemfiles-nav").Chocolat({
        imageSize: "default",
        loop: true,
        container: "#itemfiles-stage",
        }).data("chocolat");
    
        inContainer.api().open()
        inContainer.api().getElem("overlay").off("click.chocolat");
    
        $(document).off("keydown.chocolat").on("keydown.chocolat", function(e) {
            if (inContainer.api().get("initialized")) {
                if (e.keyCode == 37) {
                    inContainer.api().prev()
                }
                else if (e.keyCode == 39) {
                    inContainer.api().next()
                }
            }
        });
    };
    
    BigPicture.useLightslider = function(imageCount) {
        if ($.isFunction($.fn.lightSlider)) {
            $('#itemfiles').lightSlider({
                mode: 'fade',
                autoWidth: true,
                adaptiveHeight:false,
                gallery:true,
                item:1,
                loop:true,
                thumbItem:15,
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