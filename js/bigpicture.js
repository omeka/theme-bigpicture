(function($) {
    $(document).ready(function() {
        $("#top-nav").mmenu({
            "offCanvas": {
                "position": "right"
            }
        });

        $('.search-toggle').click(function() {
            $('#search-form').toggleClass('closed').toggleClass('open');
            if ($('#search-form').hasClass('open')) {
                $('#query').focus();
            }
        });

        $('.advanced-toggle').click(function() {
            $('#advanced-form').toggleClass('closed').toggleClass('open');
        });

        $('.collection-meta .mobile-toggle').click(function(e) {
            e.preventDefault();
            $('.collection-meta .closed, .collection-meta .open').toggleClass('closed').toggleClass('open');
        });
    });
})(jQuery)