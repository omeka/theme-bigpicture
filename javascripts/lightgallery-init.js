(function($) {
    $(document).ready(function() {
        const lgContainer = document.getElementById('omeka-lightgallery');
        var zoomScale = "1";
        if ($('.flex').data('lgZoomscale')) {
            zoomScale = Number($('.flex').data('lg-zoomscale'));
        }

        const inlineGallery = lightGallery(lgContainer, {
            licenseKey: '76E9AA35-CDB54382-B1A52890-683C953F',
            plugins: [lgThumbnail, lgVideo, lgZoom],
            exThumbImage: 'data-thumb',
            thumbnail: true,
            container: lgContainer,
            hash: false,
            closable: false,
            showMaximizeIcon: true,
            actualSize: false,
            showZoomInOutIcons: true,
            captions: true,
            allowMediaOverlap: false,
            getCaptionFromTitleOrAlt: false,
            scale: zoomScale
        });

        inlineGallery.openGallery();

        var downloadButton = lgContainer.getElementsByClassName('lg-download');
        downloadButton[0].addEventListener('click', function(e) {
            e.stopPropagation();
        }); 
    });
  })(jQuery)