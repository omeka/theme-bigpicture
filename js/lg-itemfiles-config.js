(function($) {
    $(document).ready(function() {        
        var galleryState = ($('#itemfiles li').length > 1) ? true : false;

        var lgContainer = document.getElementById('itemfiles');
        var inlineGallery = lightGallery(lgContainer, {
            licenseKey: '76E9AA35-CDB54382-B1A52890-683C953F',
            container: lgContainer,
            dynamic: false,
            hash: true,
            closable: false,
            thumbnail: true,
            selector: '.media.resource',
            showMaximizeIcon: true,
            autoplayFirstVideo: false,
            exThumbImage: 'data-thumb',
            flipVertical: false,
            flipHorizontal: false,
            zoom: 1,
            showZoomInOutIcons: true,
            actualSizeIcons: {
                zoomIn: 'hidden', 
                zoomOut: 'o-icon-undo',
            },
            plugins: [
                lgThumbnail,lgZoom,lgVideo,lgHash,lgRotate
            ],
        });

        inlineGallery.openGallery();

        $('.lg-thumb-item img').attr('alt', '');

        var dialogTitle = $('#itemfiles').data('dialog-title');
        $('#itemfiles .lg-container').first().attr('aria-label', dialogTitle);
    });
})(jQuery)

